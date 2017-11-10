<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Validator;
use App\ShopModel\Product;
class CartController extends Controller



{
    public function index()
    {
      $data=array(
        'products'=>Product::all(),
      );
        return view('shop.cart',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if (!$duplicates->isEmpty()) {
            return redirect('webshop/cart')->withSuccessMessage('สินค้าอยู่ในตะกร้าแล้ว!');
        }
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\ShopModel\Product');
        return redirect('webshop/cart')->withSuccessMessage('สินคร้าอยู่ในตะกร้าแล้ว!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);
         if ($validator->fails()) {
            session()->flash('error_message', 'สั่งได้มากสุด 5 ชิ้น.');
            return response()->json(['success' => false]);
         }
        Cart::update($id, $request->quantity);
        session()->flash('success_message', '');
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('webshop/cart')->withSuccessMessage('ลบออกแล้ว!');
    }

    public function emptyCart()
    {
        Cart::destroy();
        return redirect('webshop/cart')->withSuccessMessage('ล้างตะกร้าแล้ว!');
    }
    public function emptyCart2()
    {
        Cart::destroy();

    }
}
