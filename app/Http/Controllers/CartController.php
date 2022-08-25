<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $model = new Cart();
        $products = $model->getCart($_COOKIE['cart']);
        return view('pages.cart', ['products' => $products]);
    }

    public function addToCart(Request $request)
    {
        $model = new Cart();
        $data = $model
            ->where('cart_id', $_COOKIE['cart'])
            ->where('product_id', $request->input('product_id'))
            ->first();
        $model->cart_id = $_COOKIE['cart'];

        if (!isset($data)) {
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

        return redirect(url('/cart'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'quantity' => 'required',
        ]);

        $model = new Cart();
        $model
        ->where('cart_id', $_COOKIE['cart'])
        ->where('product_id', $request->input('product_id'))
        ->update(['quantity' => $request->input('quantity')]);

        return json_encode(['result' => $request->input('quantity')]);
    }

    public function delete($id) {
        $model = new Cart();
        $model
            ->where('cart_id', $_COOKIE['cart'])
            ->where('product_id', $id)
            ->first()
            ->delete();
        return json_encode(['result' => 'deleted']);
    }
}
