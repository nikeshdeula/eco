<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class,'login']);
Route::get('/product', [ProductController::class,'product']);
Route::get('detail/{id}', [ProductController::class,'detail']);
Route::get('/banner', [BannerController::class, 'banner']);
Route::post('/add_to_cart', [ProductController::class,'addToCart']);

