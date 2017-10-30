<?php
namespace App\Repositories;
interface ReserveProductRepositoryInterface{
  function addReserveProduct($customer_id,$reserve_status);
}
