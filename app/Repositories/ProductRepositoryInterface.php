<?php
namespace App\Repositories;
interface ProductRepositoryInterface{
  function addProduct($product_name,$category_id,$product_detail,$number_product,$product_price,$product_pic);
  function getAllProduct();
  function updateProduct($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price,$product_pic);
  function updateProduct1($product_id,$product_name,$category_id,$product_detail,$number_product,$product_price);
  function deleteProduct($id);
  function findById($id);
}
