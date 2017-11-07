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

function checkRigthSlip($id,$status_check_yet,$admin_id,$status_slip){
  $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
     'id'=>$id,
      'status_check_yet'=>$status_check_yet,
      'admin_id'=>$admin_id,
      'status_slip'=>$status_slip

   );
  $result =UserUpdateSlip::where('id',$id)->update($data);
  if($result > 0){
      return true;
  }else{
      return false;
  }

}

function checkCancelSlip($id,$status_check_yet,$admin_id,$status_slip){
  $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
     'id'=>$id,
      'status_check_yet'=>$status_check_yet,
      'admin_id'=>$admin_id,
      'status_slip'=>$status_slip

   );
  $result =UserUpdateSlip::where('id',$id)->update($data);
  if($result > 0){
      return true;
  }else{
      return false;
  }

}
}
