<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function other($id) {
        $model = new Product();
        $data = json_decode($model::getById($id))[0];
        return view('pages.product', ['data' => $data]);
    }

    public function index() {
        $model = new Product();
        $data = $model::all();
        return view('admin.product.index', ['products' => $data]);
    }

    public function add() {
        return view('admin.product.add');
    }

    public function store(Request $request) {
        $model = new Product();
        $model->name = $request->input('product_name');
        $model->price = $request->input('product_price');
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required|mimes:png,jpg,svg|max:2048'
            ]);
        
        try {
            $file= $request->file('product_image');
            $model->img = $file->getClientOriginalName();
            $file->move(public_path('images'), $file->getClientOriginalName());
        } catch(Exception $e) {
            echo $e->getMesssage();
        }
        
        
        $model->save();
    }
}
