<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = ['product_name','category_id','product_detail','number_product','product_price','product_pic'];
}
