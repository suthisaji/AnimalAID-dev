<?php
namespace App\Repositories;
use App\Donation;
  class DonationRepository implements DonationRepositoryInterface{


    function getAllDonation(){
      return NewsAni::orderBy('created_at')->get();
  }



     function addDonation($name,$sname,$tel,$amount){
            $data = array(
                'name'=>$name,
                'sname'=>$sname,
                'tel'=>  $tel,
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
