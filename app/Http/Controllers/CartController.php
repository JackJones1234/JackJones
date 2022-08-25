<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $model = new Cart();
        $data = $model
            ->where('cart_id', $_COOKIE['cart'])
            ->where('product_id', $request->input('product_id'))
            ->first();
        $model->cart_id = $_COOKIE['cart'];

        if(!isset($data)) { 
            $model->product_id = $request->input('product_id');
            $model->quantity = $request->input('product_quantity');
            $model->save();
            $product[] = ['product' => Product::where('id', $request->input('product_id'))->first(), 'quantity' => $request->input('product_quantity')];
        } else {
            $model
            ->where('cart_id', $_COOKIE['cart'])
            ->where('product_id', $request->input('product_id'))
            ->update([
                'quantity' => $request->input('product_quantity')
            ]);
        }

        $products = $model->where('cart_id', $_COOKIE['cart'])->get();
        $ids = [];
        foreach($products as $product) {
            $ids[] = ['id' => $product->product_id, 'quantity' => $product->quantity];
        }
        $products = [];

        foreach($ids as $id) {
            $products[] = ['product' => Product::where('id', $id['id'])->first(), 'quantity' => $id['quantity']];
        }
     
        return view('pages.cart', ['products' => $products]);
    }

    public function edit() {
        
    }
}
