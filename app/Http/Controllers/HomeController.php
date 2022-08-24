<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        if(!isset($_COOKIE['cart'])) { //if cookie is not set, it gets set
            return response()
                ->view('pages.home', ['products' => $products])
                ->cookie('cart', '', 1440 * 30); // 1440 minutes in a day
        }
        return view('pages.home', ['products' => $products]);
    }
}
