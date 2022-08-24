<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
           'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('admin/product')->with('message', 'Login successful');
        }

        return redirect('admin')->with('message', 'Login details are not valid');
    }

    public function logOut()
    {
        if(Auth::check()) {
            Session::flush();
            Auth::logout();
            return redirect('admin');
        }
    }

    public function resetPassword()
    {
        // Need to allow reset password
    }

    public function viewAddProduct()
    {
        // Need to validate if user is a valid admin;
        // Render add product form
    }

    public function viewEditProduct()
    {
        // Need to validate if user is a valid admin;
        // Render edit product form
    }

    public function saveProduct()
    {
        // Need to validate if user is a valid admin;
        // Save product action
    }

    public function deleteProduct(int $id)
    {
        // Need to validate if user is a valid admin;
        $products = Product::getById($id);
        $products->delete();
    }

    public function massDelete(array $ids)
    {
        // Need to validate if user is a valid admin;
        foreach ($ids as $id) {
            Product::deleteById($id);
        }
    }
}
