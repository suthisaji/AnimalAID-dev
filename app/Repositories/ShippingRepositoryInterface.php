<?php
namespace App\Repositories;
interface ShippingRepositoryInterface{
  function addShipping($ordering_id,$buyer_id,$address,$tel,$email);

}
