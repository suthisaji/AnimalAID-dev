<?php
namespace App\Repositories;
use App\UserUpdateSlip;


use File;
use DB;

class UserUpdateSlipRepository implements UserUpdateSlipRepositoryInterface{


  function getAllUserUpdateSlip(){
    return UserUpdateSlip::orderBy('created_at')->get();
  }

function addUserUpdateSlip($name,$dateTimeTransfer,$newImageName,$status_check_yet){
  $data = array(

      'name'=>$name,
      'dateTimeTransfer'=>$dateTimeTransfer,
      'picture_slip' => $newImageName,
      'status_check_yet' => $status_check_yet


  );
  try{
      $result = UserUpdateSlip::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

}
