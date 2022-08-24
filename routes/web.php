<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/admin/login-out', [AdminController::class, 'logOut']);
Route::get('/admin/resetpass', [AdminController::class, 'resetPassword']);
Route::get('/admin/dashboard', [AdminController::class, 'dashBoardView']);
Route::get('/admin/product/delete/{$id}', [AdminController::class, 'deleteProduct']);
Route::get('/admin/product/massDelete/{$id}', [AdminController::class, 'massDelete']);
Route::get('/product/{id}', [ProductController::class, 'index']);

Route::post('/admin/login', [AdminController::class, 'login']);
