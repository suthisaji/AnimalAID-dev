<?php

namespace App\Http\Controllers;
require_once dirname(__FILE__, 3).'/omise/lib/Omise.php';
use Illuminate\Http\Request;
use Response;

class DonateController extends Controller
{
    function charge(Request $request){
        $data = $request->json()->all();
        $amount = $data['amount'];
        $name = $data['name'];
        $sname = $data['sname'];
        $email = $data['email'];
        $bank = $data['bank'];
        
        define('OMISE_PUBLIC_KEY', 'pkey_test_57gpwuk3sm7mirumtsx');
        define('OMISE_SECRET_KEY', 'skey_test_57gpwuk42fxek0ag94z');
        $charge = \OmiseCharge::create(array(
            'amount' => $amount,
            'currency' => 'thb',
            'offsite' => $bank,
            'return_uri' => 'http://animal-aid.me',
            'metadata' => ['name' => $name, 'sname' => $sname, 'email' => $email]
          ));
        return Response::json([
            'statusCode' => 200,
            'url' => $charge['authorize_uri']
            ], 200);
    }

    function webhook(Request $request){
        return Response::json([
            'statusCode' => 200,
            'statusMessage' => 'Success'
            ], 200);
    }
}
