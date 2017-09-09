<?php
namespace App\Repositories;
use App\Donation;
  class DonationRepository implements DonationRepositoryInterface{


    function getAllDonation(){
      return NewsAni::orderBy('created_at')->get();
  }



     function addDonation($name,$sname,$email,$tel,$bank,$amount){
            $data = array(
                'name'=>$name,
                'sname'=>$sname,
                'email'=>$email,
                'tel'=>  $tel,
                'bank'=>$bank,
                'amount'=>$amount
            );

            try{
                $result = Donation::create($data);
                return true;
            }catch(Exception $e){
                return false;
            }
        }



        }
