<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers\ProductController;

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

Route::get('/admin', function () {
    return view('admin.admin') ;
});

Route::get('/admin/logout', [AdminController::class, 'logOut']);
Route::get('/admin/resetpass', [AdminController::class, 'resetPassword']);
Route::get('/admin/dashboard', [AdminController::class, 'dashBoardView']);
Route::get('/admin/product/delete/{$id}', [AdminController::class, 'deleteProduct']);
Route::get('/admin/product/massDelete/{$id}', [AdminController::class, 'massDelete']);
Route::get('/admin/product', [ProductController::class, 'index']);
Route::get('/admin/product/add', [ProductController::class, 'add']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/product/store', [ProductController::class, 'store']);

Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/admin/product/delete', [ProductController::class, 'delete']);
Route::post('/admin/product/edit', [ProductController::class, 'storeEdit']);
