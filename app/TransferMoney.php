<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferMoney extends Model
{
  protected $table = 'transferMoneys';
  protected $fillable = ['dateTimeOfTransfer','Bank_name','Bank_Branch','amountOfTransfer','picture_slip','checking_status'];
}
