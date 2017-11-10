<?php
namespace App\Repositories;
use App\Ordering;
use App\Ordering_product;
use App\TransferMoney;
use File;
use DB;

class OrderingRepository implements OrderingRepositoryInterface{


  function getAllOrdering(){
    return  Ordering_product::orderBy('created_at')->get();
  }


  function updateOrderingPaid($ordering_id,$pay_status){
      $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
         'pay_status'=>$pay_status
       );
      $result = Ordering::where('ordering_id',$ordering_id)->update($data);
      if($result > 0){
          return true;
      }else{
          return false;
      }
  }



    function deleteOrder($ordering_id,$order_number){
      $ordering = Ordering::where('ordering_id',$ordering_id)->first();
      $result = Ordering_product::where('ordering_id',$ordering_id)->delete();
      $result1 = Ordering::where('ordering_id',$ordering_id)->delete();
      $result2 = TransferMoney::where('order_number',$order_number)->delete();
        if($result>=0 && $result2>=0){
          return true;
        }else{
          return false;
        }
    }
}
