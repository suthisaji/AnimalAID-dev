<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopModel\Category;
use App\ShopModel\Product;

class ShopController extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $data = array(
            'categories' => Category::all(),
            'products' => Product::paginate(20)
        );
        return view('shop.index', $data);
    }


    function listProductAdminView()
    {
        $data = array(
            'categories' => Category::all(),
            'products' => Product::paginate(20)
        );
        return view('shop.listProductAdminView', $data);
    }
}
