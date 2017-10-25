<?php
namespace App\Repositories;
use App\Category;
  class categoryRepository implements CategoryRepositoryInterface{

        function getAllCategory(){
          return Category::orderBy('category_id')->get();//เรียงตามวันที่สร้าวงแต่ค่ามึงเปน nullถถถถถถ
        }

        function findTypeById($type_id){
          return Category::where('category_id',$category_id)->first(); //beacuse the only first one for search
        }

      }
