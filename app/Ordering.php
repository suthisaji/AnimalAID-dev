<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordering extends Model
{
  protected $table = 'orderings';
  protected $fillable = ['order_number','customer_id','product_id','product_number','amount','pay_status'];



    public function join_User(){
      return $this->belongsTo('App\User','customer_id', 'id');
    }
    public function join_Shipping(){
      return $this->belongsTo('App\Shipping','ordering_id', 'ordering_id');
    }
}
