<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //check if cookie exists
        //if cookie does not exist create a cookie
        //if cookie exists than check in db for cart table
        // $request->cookie('cart');

        setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
        // return $response;
        $products = Product::all();
        return view('pages.home', ['products' => $products]);
    }
}
