<?php
namespace App\Repositories;
use App\TransferMoney;
use App\Product;
use App\User;
use App\Shipping;
use File;
use DB;

class ShippingRepository implements ShippingRepositoryInterface{


  function getAllShipping(){
    return Shipping::orderBy('created_at')->get();
  }

function addShipping($ordering_id,$buyer_id,$address,$tel,$email){
  $data = array(

      'ordering_id'=>$ordering_id,
      'buyer_id'=>$buyer_id,
      'address'=>$address,
      'tel'=>$tel,
      'email'=>$email,

  );
  try{
      $result = Shipping::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

function updateShippingCancel($ordering_id,$shipping_status){
    $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
       'shipping_status'=>$shipping_status
     );
    $result = Shipping::where('ordering_id',$ordering_id)->update($data);
    if($result > 0){
        return true;
    }else{
        return false;
    }
}

function updateShippingAfterDelivery($ordering_id,$shipping_status,$dateTimeShipping,$package_id){
    $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
       'dateTimeShipping'=>$dateTimeShipping,
       'package_id'=>$package_id,
       'shipping_status'=>$shipping_status
     );
    $result = Shipping::where('ordering_id',$ordering_id)->update($data);
    if($result > 0){
        return true;
    }else{
        return false;
    }
}




}
