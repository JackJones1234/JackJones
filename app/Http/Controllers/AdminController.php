<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AdminController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        // Need to create login session
    }

    public function logOut()
    {
        // Need to remove login session
    }

    public function resetPassword()
    {
        // Need to allow reset password
    }

    public function dashBoardView()
    {
        $products = Product::all();
<<<<<<< HEAD
        $admin = 'Bob'; // Implement logic to get current user name
        return view('pages.dashboard.dashboard', ['products' => $products, 'admin' => $admin]);
=======
        $admin = 'Bob';
        return view('dashboard', ['products' => $products, 'admin' => $admin]);
>>>>>>> a2e28b413a40d0c6ba9ebb7b909140324974902d
    }

    public function viewAddProduct()
    {
        // Render add product form
    }

    public function viewEditProduct()
    {
        // Render edit product form
    }

    public function saveProduct()
    {
        // Save product action
    }

    public function deleteProduct(int $id)
    {
        $products = Product::getById($id);
        $products->delete();
    }

    public function massDelete(array $ids)
    {
        foreach ($ids as $id) {
            Product::deleteById($id);
        }
    }
}
