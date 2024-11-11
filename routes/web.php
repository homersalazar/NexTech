<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});

//order
Route::get('/order', function () {
    return view('order.Index');
});

Route::get('/createorder', function () {
    return view('order.Create');
});

//product
Route::get('/product', function () {
    return view('product.Index');
});
Route::get('/createproduct', function () {
    return view('product.Create');
});

//account
Route::get('/account', function () {
    return view('account.Index');
});
Route::get('/createaccount', function () {
    return view('account.Create');
});


//shipping
Route::get('/shipping', function () {
    return view('shipping.Index');
});
Route::get('/createshipping', function () {
    return view('shipping.Create');
});

//discount
Route::get('/discount', function () {
    return view('discount.Index');
});
Route::get('/creatediscount', function () {
    return view('discount.Create');
});

//discount
Route::get('/taxes', function () {
    return view('tax.Index');
});
Route::get('/createtax', function () {
    return view('tax.Create');
});


//media
Route::resource('/category', CategoryController::class);

//media
Route::resource('/media', MediaController::class);


// Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'register'])->name('register');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
