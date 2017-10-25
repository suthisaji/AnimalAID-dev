<?php
namespace App\Repositories;
use App\TransferMoney;
use App\Product;
use App\User;

use File;
use DB;

class TransferMoneyRepository implements TransferMoneyRepositoryInterface{


  function getAllTransferMoney(){
    return TransferMoney::orderBy('created_at')->get();
  }


}
