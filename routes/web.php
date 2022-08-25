<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('login');

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'index']);

Route::match(['GET', 'POST'],'/cart', [CartController::class, 'index']);
Route::post('/cart/edit', [CartController::class, 'edit']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'addToCart']);
Route::get('/cart/delete/{id}', [CartController::class, 'delete']);

Route::get('/admin', function () {
    return view('admin.admin') ;
});
Route::get('/admin/logout', [AdminController::class, 'logOut']);
Route::get('/admin/product', [ProductController::class, 'index']);
Route::get('/admin/product/add', [ProductController::class, 'add']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/product/store', [ProductController::class, 'store']);
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/admin/product/delete', [ProductController::class, 'delete']);
Route::post('/admin/product/edit', [ProductController::class, 'storeEdit']);

Route::get('/checkout', [CheckoutController::class, 'index']);
