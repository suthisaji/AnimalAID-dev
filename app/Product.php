<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = ['product_name','category_id','product_detail','number_product','product_price','product_pic'];

  public function join_category(){
    //return $this->belongsTo('App\DonationType','forenge key of animal', 'primary key of donationtype');
    return $this->belongsTo('App\Category','category_id', 'category_id');
  }
}
