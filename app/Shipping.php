<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
  protected $table = 'shippings';
  protected $fillable = ['ordering_id','buyer_id','address','tel','email'];

  public function join_User(){
    return $this->belongsTo('App\User','buyer_id', 'id');
  }
}
