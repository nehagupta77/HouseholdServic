<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userdetailscontroler;


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
    return view('
    frontend.index');
});

//auth
Route::view('/home', 'frontend.index')->name('home');
Route::view('/login', 'frontend.auth.login')->name('frontend.login');
Route::view('/signup', 'frontend.auth.signup')->name('frontend.signup');
Route::post('/data', [UserController::class, 'signup'])->name('login.submit');
Route::post('/checklogin',[UserController::class, 'checkLogin'])->name('index.submit');

//for layouts
// Route::view('/master', 'backend.layouts.master');
// Route::view('/dashboard', 'dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//for category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

//for product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

// userdetails
Route::get('/userdetails', [userdetailscontroler::class, 'userdetail'])->name('userdetails.userdetail');
// Route::get('/userdetails/{id}/edit', [userdetailscontroler::class, 'edit'])->name('userdetails.edit');
// Route::put('/userdetails/{id}', [userdetailscontroler::class, 'update'])->name('userdetails.update');
// Route::delete('/userdetails/{id}', [userdetailscontroler::class, 'destroy'])->name('userdetails.destroy');

//for price 
Route::get('/price', [ProductController::class, 'index'])->name('price.index');
Route::get('/price/create', [ProductController::class, 'create'])->name('price.create');
Route::post('/price/store', [ProductController::class, 'store'])->name('price.store');
Route::get('/price/edit/{id}', [ProductController::class, 'edit'])->name('price.edit');
Route::post('/price/update/{id}', [ProductController::class, 'update'])->name('price.update');
Route::get('/price/delete/{id}', [ProductController::class, 'delete'])->name('price.delete');