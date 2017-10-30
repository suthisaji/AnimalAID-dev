<?php
namespace App\Repositories;
use App\ReserveProduct;


use File;
use DB;

class ReserveProductRepository implements ReserveProductRepositoryInterface{


  function getAllReserveProduct(){
    return ReserveProduct::orderBy('created_at')->get();
  }

function addReserveProduct($customer_id,$reserve_status){
  $data = array(

      'customer_id'=>$customer_id,
      'reserve_status'=>$reserve_status,
      

  );
  try{
      $result = ReserveProduct::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

}
