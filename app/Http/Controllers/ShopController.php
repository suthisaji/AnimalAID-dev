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

    function index(Request $request)
    {
        $data = [];
        if($request->cate){
            $category = Category::where('category_name', $request->cate)->first();
            $data = array(
                'categories' => Category::all(),
                'products' => Product::where('category_id', $category->category_id)->paginate(20)
            );
        }else{
            $data = array(
                'categories' => Category::all(),
                'products' => Product::paginate(20)
            );
        }

        return view('shop.index', $data);
    }

    function checkout(Request $request){
      return view('shop.checkout');
    }

    function submit(){
        return view('shop.submit');
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
