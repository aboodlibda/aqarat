<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
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

Route::get('product/{product}',[ProductsController::class,'product'])->name('product');
Route::resource('orders',OrdersController::class);
Route::get('payment-success',[HomeController::class,'payment'])->name('payment');
Route::get('checkout/{product}',[HomeController::class,'checkout'])->name('checkout');

Route::group( ['prefix' => 'dashboard/','middleware' => ['auth:web']] , function (){

    Route::get('',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('categories',CategoriesController::class);
    Route::resource('products',ProductsController::class);
    Route::resource('cities',CitiesController::class);
    Route::resource('settings',\App\Http\Controllers\ContactsController::class);

});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('about-us', [HomeController::class, 'about'])->name('about');

Route::view('app','layouts.app');
