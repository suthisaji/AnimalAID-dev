<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveProduct extends Model
{
  protected $table = 'reserveProducts';
  protected $fillable = ['customer_id','reserve_status'];

  public function join_Product_reserve(){
    //return $this->belongsTo('App\DonationType','forenge key of animal', 'primary key of donationtype');
    return $this->belongsTo('App\Product_reserve','reserve_id', 'reserve_id');
  }
}
