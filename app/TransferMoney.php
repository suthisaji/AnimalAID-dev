<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferMoney extends Model
{
  protected $table = 'transferMoneys';
  protected $fillable = ['order_number','dateTimeOfTransfer','Bank_name','Bank_Branch','amountOfTransfer','picture_slip','checking_status'];


  public function join_Ordering(){
    return $this->belongsTo('App\Ordering','order_number', 'order_number');
  }
}
