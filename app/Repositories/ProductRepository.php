<?php
namespace App\Repositories;
use App\Product;
use App\User;
use File;
use DB;

class ProductRepository implements ProductRepositoryInterface{
  function addProduct($product_name,$category_id,$product_detail,$number_product,$product_price,$product_pic){ // รับเป็น array
      $data = array(

          'product_name'=>$product_name,
          'category_id'=>$category_id,
          'product_detail'=>$product_detail,
          'number_product'=>$number_product,
          'product_price'=>$product_price,
          'product_pic'=>$product_pic,

          //'student_password'=>Hash::make(str_random(32))
      );
      try{
          $result = Product::create($data);
          return true;
      }catch(Exception $e){
          return false;
      }
  }

  function getAllProduct(){
    return Product::orderBy('created_at')->get();
  }

  function updateProduct($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price,$product_pic){
      $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
        'product_name'=>$product_name,
        'category_id'=>$category_id,
        'product_detail'=>$product_detail,
        'number_product'=>$number_product,
        'product_price'=>$product_price,
        'product_pic'=>$product_pic,
      );
      $result = Product::where('product_id',$product_id)->update($data);
      if($result > 0){
          return true;
      }else{
          return false;
      }
  }
  function updateProduct1($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price){//จะให้ทำอันนี้ ถ้าแอดมินไม่ได้แก้ไขรูป
      $data = array(//ช่องนี้ = ตัวแปรที่ใส่มาใน parameter
        'product_name'=>$product_name,
        'category_id'=>$category_id,
        'product_detail'=>$product_detail,
        'number_product'=>$number_product,
        'product_price'=>$product_price,

      );
      $result = Product::where('product_id',$product_id)->update($data);
      if($result > 0){
          return true;
      }else{
          return false;
      }
  }


  function deleteProduct($id){
    $product = Product::where('product_id',$id)->first();
    File::delete('images/'.$product->product_pic);
    $result = Product::where('product_id',$id)->delete();
    $result2 = Product::where('product_id',$id)->delete();
      if($result>=0 && $result2>=0){
        return true;
      }else{
        return false;
      }
  }

  function findById($product_id){
   return Product::where('product_id',$product_id)->first();
 }



}
