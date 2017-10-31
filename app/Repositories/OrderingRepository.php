<?php
namespace App\Repositories;
use App\Ordering;


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
}
