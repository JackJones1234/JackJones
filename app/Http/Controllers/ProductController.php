<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id) {
        $model = new Product();
        return view('pages.product.product', ['id' => $id]);
    }
}
