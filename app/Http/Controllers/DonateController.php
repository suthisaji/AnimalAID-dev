<?php

namespace App\Http\Controllers;
require_once dirname(__FILE__, 3).'/omise/lib/Omise.php';
use Illuminate\Http\Request;
use Response;
use Nexmo\Laravel\Facade\Nexmo;
use App\Donation;
use App\Repositories\DonationRepositoryInterface;
use App\User;
use Auth;
use DB;

class DonateController extends Controller
{
  protected $DonationRepository;

 function __construct(DonationRepositoryInterface $DonationRepository,UserRepositoryInterface $UserRepository){
     $this->DonationRepository = $DonationRepository;
       $this->UserRepository = $UserRepository;
 }
//ข้างบนจะเรียกใช้ repo ที่สร้าง


 /*รับจาก omise*/
    function charge(Request $request){
        $data = $request->json()->all();
        $amount = $data['amount'];
        $name = $data['name'];
        $sname = $data['sname'];
        $tel = $data['tel'];
        $bank = $data['bank'];

        define('OMISE_PUBLIC_KEY', 'pkey_test_57gpwuk3sm7mirumtsx');
        define('OMISE_SECRET_KEY', 'skey_test_57gpwuk42fxek0ag94z');
        $charge = \OmiseCharge::create(array(
            'amount' => $amount,
            'currency' => 'thb',
            'offsite' => $bank,

            'return_uri' => 'http://animal-aid.me/all',
          //  'return_uri' => 'http://localhost:8000/all',
            'metadata' => ['name' => $name, 'sname' => $sname, 'tel' => $tel]
          ));
        return Response::json([
            'statusCode' => 200,
            'url' => $charge['authorize_uri']
            ], 200);
    }

    function webhook(Request $request){
        $payload = $request->json()->all();
        if($payload['key'] === 'charge.complete'){
            if($payload['data']['paid']){ //ถ้าจ่ายสำเร็จ
                //ส่ง SMS
                $tel = $payload['data']['metadata']['tel'];
                $tel = preg_replace('/^0/', '66', $tel);
                $name = $payload['data']['metadata']['name'];
                $sname = $payload['data']['metadata']['sname'];
                $amount = $payload['data']['amount'];
                $amount = substr($amount, 0, strlen($amount)-2).'.'.substr($amount, -2);
                /*
                Nexmo::message()->send([
                    'to' => $tel,
                    'from' => 'NEXMO',
                    'text' => 'ขอขอบคุณ '.$name.' '.$sname.' ที่บริจาคเงินจำนวน '.$amount.' บาท ให้แก่ ANIMAL-AID',
                    'type' => 'unicode'
                ]);*/
          //    $result = $this->DonationRepository->addDonation($name,$sname,$email,$tel,$bank,$amount);

            //    if($result){
            //        echo "success to add donationdata";
              //  }else{
              //      echo "Failed to add donation";
              //  }


                return Response::json([
                    'statusCode' => 200,
                    'statusMessage' => 'Success',
                    'payload' => $amount
                    ], 200);



            }else{ //ถ้าจ่ายไม่สำเร็จ

            }
        }
    }

    function donorName(){
      $name = $payload['data']['metadata']['name'];
      $sname = $payload['data']['metadata']['sname'];
      $amount = $payload['data']['amount'];

      $data = array(
          'amount'=>$amount,
          'sname'=>$sname,
        'name'=>$name,
  );



     return view('all',$data);
  }











}
