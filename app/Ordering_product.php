<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordering_product extends Model
{
  protected $table = 'ordering_products';
  protected $fillable = ['ordering_id','product_id','product_number','amount'];
}
