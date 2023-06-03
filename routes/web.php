<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/login', function () {

//     return view('/login/login');
// });
Route::get('/admin/login',[LoginController::class,'index']);
Route::post('/admin/login/postlogin',[LoginController::class,'postlogin']);

Route::get('/', function () {
    return view('HomePage');
});
Route::get('/iphone', function () {
    return view('Iphone');
});
Route::get('/am-thanh', function () {
    return view('AmThanh');
});
Route::get('/ipad', function () {
    return view('IPad');
});
Route::get('/mac', function () {
    return view('Mac');
});
Route::get('/phu-kien', function () {
    return view('PhuKien');
});
Route::get('/product', function () {
    return view('Product');
});
Route::get('/apple-watch', function () {
    return view('Watch');
});
Route::post('/register', function () {
    return view('HomePage');
});
Route::get('/product1', function () {
    return view('product1');
});

Route::post('/cart/add', 'CartController@addToCart')->name('cart.add');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
