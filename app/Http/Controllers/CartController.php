<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $model = new Cart();
        $data = $model->where('cart_id', $_COOKIE['cart'])->first();
        $model->cart_id = $_COOKIE['cart'];

        if(!isset($data)) { //ja nav datu baze ieraksts ar tadu session cookie tad to ieliek card tabula ar izveleto produktu
            $model->product_id = $request->input('product_id');
            $model->save();
            $product = Product::where('id', $request->input('product_id'))->first();
            return view('pages.cart', ['products' => $product]);
        }

        $model->product_id = $data->product_id . ',' . $request->input('product_id');
        $model->where('cart_id', $_COOKIE['cart'])
            ->update([
                'product_id' => $model->product_id
            ]);

        $products = [];
        foreach(explode(',', $model->product_id) as $id) {
            $products[] = Product::where('id', $id)->first();
        }
        return view('pages.cart', ['products' => $products]);
    }
}
