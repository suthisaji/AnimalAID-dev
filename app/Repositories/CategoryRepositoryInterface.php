<?php
namespace App\Repositories;
interface CategoryRepositoryInterface{
    function getAllCategory();
    function findTypeById($category_id);
}
