<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $cartModel = new Cart();
        $products = $cartModel->getCart($_COOKIE['cart']);
        return view('pages.checkout', ['products' => $products]);
    }
}
