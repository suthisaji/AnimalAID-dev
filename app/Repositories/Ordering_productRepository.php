<?php
namespace App\Repositories;
use App\Ordering_product;


use File;
use DB;

class Ordering_productRepository implements Ordering_productRepositoryInterface{


  function getAllOrdering_product(){
    return  Ordering_product::orderBy('created_at')->get();
  }



}
