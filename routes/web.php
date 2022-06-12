<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [ProductsController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [ProductsController::class, 'show'])->name('showproduct');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// user
Route::group(['middleware' => 'roles', 'roles' => ['user', 'moderator', 'admin']], function(){
    Route::get('/cartshow', [CartController::class, 'index'])->name('showcart');
    Route::post('/cartadd', [CartController::class, 'add'])->name('addcart');
    Route::get('/destroy/{id}', [CartController::class, 'destroy'])->name('destroycart');
    Route::get('/profil/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('profil');
    Route::post('/updateprofile', [App\Http\Controllers\UserController::class, 'store'])->name('updateprofile');
});

// admin
Route::group(['middleware' => 'roles', 'roles' => ['admin', 'moderator']], function(){
    Route::get('/panel', [AdminController::class, 'index'])->name('panel');
    Route::get('/products', [AdminController::class, 'allproducts'])->name('admin.products');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/destroyproduct/{id}', [ProductsController::class, 'destroy'])->name('destroyproduct');
    Route::get('/destroyuser/{id}', [AdminController::class, 'destroyuser'])->name('destroyuser');
    Route::get('/create', [ProductsController::class, 'create'])->name('createproduct');
    Route::post('/store', [ProductsController::class, 'store'])->name('storeproduct');
    
});
Route::get('/storeorder', [OrderController::class, 'store'])->name('storeorder');
Route::get('/orders/{id}', [OrderController::class, 'index'])->name('ordershistory');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('showorder');
