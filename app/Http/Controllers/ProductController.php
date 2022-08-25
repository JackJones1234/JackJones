<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id) {
        $product = Product::where('id', $id)->first();
        return view('pages.product', ['product' => $product]);
    }
}
