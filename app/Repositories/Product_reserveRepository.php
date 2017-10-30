<?php
namespace App\Repositories;
use App\Product_reserve;


use File;
use DB;

class Product_reserveRepository implements Product_reserveRepositoryInterface{


  function getAllProduct_reserve(){
    return  Product_reserve::orderBy('created_at')->get();
  }

function addproduct_reserve($reserve_id,$product_id,$product_number){
  $data = array(

      'reserve_id'=>$reserve_id,
      'product_id'=>$product_id,
      'product_number'=>$product_number,


  );
  try{
      $result =  Product_reserve::create($data);
      return true;
  }catch(Exception $e){
      return false;
  }
}

}
