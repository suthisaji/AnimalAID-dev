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
}
