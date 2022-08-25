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

        if(!isset($data)) { //ja nav datu baze ieraksts ar tadu cookie un prod_id tad to ieliek card tabula ar izveleto produktu
            $model->product_id = $request->input('product_id');
            $model->quantity = $request->input('product_quantity');
            $model->save();
            $product = Product::where('id', $request->input('product_id'))->first();
            return view('pages.cart', ['products' => $product, 'quantity' => $model->quantity]);
        }

        //ja ir jau tads ieraksts tad to vajag update tikai pec quantity

        // $model->product_id = $data->product_id . ',' . $request->input('product_id');
        $model
            ->where('cart_id', $_COOKIE['cart'])
            ->where('product_id', $request->input('product_id'))
            ->update([
                'quantity' => $request->input('product_quantity')
            ]);
        

        // foreach(explode(',', $model->product_id) as $id) {
        //     $products[] = Product::where('id', $id)->first();
        // }
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
}
