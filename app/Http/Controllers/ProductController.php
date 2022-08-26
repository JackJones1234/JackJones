<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Runner\Hook;

class ProductController extends Controller
{
    public function index($id) {
        $product = Product::where('id', $id)->first();
        return view('pages.product', ['product' => $product]);
    }

    public function search(Request $request) {
        $product = new Product();
        $products = DB::table('products')->where('name', 'like', "%". $request->input('search')."%")->get();
        if(sizeof($products) == 0) {
            // return view('pages.home', ['products' => Product::all(), 'search' => false]);
        }
        return view('pages.home', ['products' => $products]);
    }
}

// name
// name...."%nasme%"