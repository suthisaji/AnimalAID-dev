<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_reserve extends Model
{
  protected $table = 'product_reserves';
  protected $fillable = ['reserve_id','product_id','product_number'];

  public function join_ReserveProduct(){
    //return $this->belongsTo('App\DonationType','forenge key of animal', 'primary key of donationtype');
    return $this->belongsTo('App\ReserveProduct','reserve_id', 'reserve_id');
  }
  public function join_Product(){

    return $this->belongsTo('App\Product','product_id', 'product_id');
  }
}
