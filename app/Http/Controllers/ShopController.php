<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopModel\Category;

class ShopController extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $data = array(
            'categories' => Category::all()
        );
        return view('shop.index', $data);
    }
}
