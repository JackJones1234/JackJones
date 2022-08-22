<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// admin
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/login-out', [AdminController::class, 'logOut']);
Route::get('/admin/resetpass', [AdminController::class, 'resetPassword']);
Route::get('/admin/dashboard', [AdminController::class, 'dashBoardView']);

// home
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
