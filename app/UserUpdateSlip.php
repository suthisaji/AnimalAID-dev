<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUpdateSlip extends Model
{
  protected $table = 'userUpdateSlips';
  protected $fillable = ['name','picture_slip','dateTimeTransfer','status_check_yet','admin_id','status_slip','amount','created_at','updated_at'];


  public function join_user(){
    return $this->belongsTo('App\User','id', 'admin_id');
  }
}
