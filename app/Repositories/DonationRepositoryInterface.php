<?php
namespace App\Repositories;
interface DonationRepositoryInterface{
function getAllDonation();
function addDonation($name,$sname,$email,$tel,$bank,$amount);






}
