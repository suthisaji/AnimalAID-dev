<?php
namespace App\Repositories;
use App\TransferMoney;
use App\Product;
use App\User;

use File;
use DB;

class TransferMoneyRepository implements TransferMoneyRepositoryInterface{


  function getAllTransferMoney(){
    return TransferMoney::orderBy('created_at')->get();
  }
  function updateTransferMoneyConfirm($order_number,$checking_status){
      $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
         'checking_status'=>$checking_status
       );
      $result = TransferMoney::where('order_number',$order_number)->update($data);
      if($result > 0){
          return true;
      }else{
          return false;
      }
  }

}
