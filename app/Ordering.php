<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordering extends Model
{
  protected $table = 'orderings';
  protected $fillable = ['ordering_id','order_number','customer_id','pay_status','home','district','amphoe','province','zipcode'];



    public function join_User(){
      return $this->belongsTo('App\User','customer_id', 'id');
    }
    public function join_Shipping(){
      return $this->belongsTo('App\Shipping','ordering_id', 'ordering_id');
    }
    public function join_Ordering_product(){
      return $this->belongsTo('App\Ordering_product','ordering_id', 'ordering_id');
    }

    public function join_TransferMoney(){
      return $this->belongsTo('App\TransferMoney','order_number', 'order_number');
    }

}
