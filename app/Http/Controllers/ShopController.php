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
            'products' => Product::all()
        );
        return view('shop.index', $data);
    }
}
