<?php
namespace App\Repositories;
interface DonationRepositoryInterface{
function getAllDonation();
function addDonation($name,$sname,$tel,$amount);

}
