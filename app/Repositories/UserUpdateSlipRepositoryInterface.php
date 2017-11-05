<?php
namespace App\Repositories;
interface UserUpdateSlipRepositoryInterface{
  	function getAllUserUpdateSlip();
  	function addUserUpdateSlip($name,$dateTimeTransfer,$newImageName,$status_check_yet);

}
