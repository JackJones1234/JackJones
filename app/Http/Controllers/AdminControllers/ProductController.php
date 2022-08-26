<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct() {
        $this->middleware("auth");
    }

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
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required|mimes:png,jpg,svg|max:2048'
        ]);
        $model = new Product();
        $model->name = $request->input('product_name');
        $model->price = $request->input('product_price');
        try {
            $file= $request->file('product_image');
            $model->img = $file->getClientOriginalName();
            $file->move(public_path('images/product/tablelamps'), $file->getClientOriginalName());
        } catch(Exception $e) {
            echo $e->getMesssage();
        }


        $model->save();

        return redirect('/');
    }

    public function edit($id) {
        $product = Product::where('id', $id)->first();
        return view('admin.product.edit', ['product' => $product]);
    }

    public function delete(Request $request) {
        $idToDelete = $request->input('product_id');
        $model = new Product();
        $model->where('id', $idToDelete)->delete();
        return redirect('/admin/product')->with('message', 'Product deleted!');
    }

    public function storeEdit(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            // 'product_image' => 'required|mimes:png,jpg,svg|max:2048'
        ]);

        $productData = Product::find($request->input('product_id'));
        $productData->name = $request->input('product_name');
        $productData->price = $request->input('product_price');
        // $productData->img = $request->input('pr')
        $productData->save();

        return redirect('/admin/product')->with('message', 'Product updated successfully!');
    }

}
