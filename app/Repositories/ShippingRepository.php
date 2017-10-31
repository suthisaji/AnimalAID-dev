<?php
namespace App\Repositories;
use App\TransferMoney;
use App\Product;
use App\User;
use App\Shipping;
use App\Ordering;
use App\Ordering_product;

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

function addOrdering($ordering_id,$order_number,$customer_id,$pay_status){
  $data = array(

      'order_number'=>$order_number,
      'customer_id'=>$customer_id,
      'pay_status'=>$pay_status,
      'ordering_id'=>$ordering_id,

  );
  try{
      $result = Ordering::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}



function addOrdering2($ordering_id,$order_number,$customer_id,$pay_status,$home,$district,$amphoe,$province,$zipcode){
  $data = array(

      'order_number'=>$order_number,
      'customer_id'=>$customer_id,
      'pay_status'=>$pay_status,
      'ordering_id'=>$ordering_id,
      'home'=>$home,
      'district'=>$district,
      'amphoe'=>$amphoe,
      'province'=>$province,
      'zipcode'=>$zipcode,



  );
  try{
      $result = Ordering::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}


function addTransferMoney($order_number,$Bank_name,$amountOfTransfer){
  $data = array(
      'order_number'=>$order_number,
      'Bank_name'=>$Bank_name,
      'amountOfTransfer'=>$amountOfTransfer,

  );
  try{
      $result = TransferMoney::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}


function addTransferMoney2($order_number,$Bank_name,$amountOfTransfer){
  $data = array(
      'order_number'=>$order_number,
      'Bank_name'=>$Bank_name,
      'amountOfTransfer'=>$amountOfTransfer,
  );
  try{
      $result = TransferMoney::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

function addOrdering_product($ordering_id,$product_id,$product_number,$amount){
  $data = array(
       'ordering_id'=>$ordering_id,
      'product_id'=>$product_id,
      'product_number'=>$product_number,
      'amount'=>$amount,

  );
  try{
      $result =Ordering_product::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

}
