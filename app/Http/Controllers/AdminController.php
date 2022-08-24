<?php

namespace App\Http\Controllers;

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
            return redirect('admin')->with('message', 'Login successful');
        }

        return redirect('admin')->with('message', 'Login details are not valid');
    }

    public function logOut()
    {
        echo Auth::id();
       if(Auth::check()) {
           return redirect('admin')->with('message', 'passed check func!');
       }
//        return redirect('admin')->with('message', 'Did not pass check func :(((');
        // Need to validate if user is a valid admin;
        // Need to remove login session
    }

    public function resetPassword()
    {
        // Need to allow reset password
    }

    public function dashBoardView()
    {
        // Need to validate if user is a valid admin;

        $products = Product::all();
        $admin = 'Bob'; // Implement logic to get current user name
        return view('pages.dashboard', ['products' => $products, 'admin' => $admin]);
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
