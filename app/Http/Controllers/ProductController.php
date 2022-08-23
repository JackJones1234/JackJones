<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id) {
        $model = new Product();
        $data = json_decode($model::getById($id))[0];
        return view('pages.product', ['data' => $data]);
    }
}
