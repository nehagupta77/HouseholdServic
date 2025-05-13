<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userdetailscontroler;
use App\Http\controllers\PriceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SystemSettingController;
use App\Http\Controllers\HomeController;
use App\Services\SiteSettingService;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\WhishlistController;

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

// Route::get('/', function () {
//     $settings = app(SiteSettingService::class);
//     return view('frontend.index')->with('globalSettings', $settings);
// });

//auth
Route::get('/', [HomeController::class,'index'])->name('home');
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
Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/detail/{id}', [CategoryController::class, 'categoryDetails'])->name('category.detail');

//for product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product/detail/{id}', [productController::class, 'productDetails'])->name('product.detail');

// userdetails
Route::get('/userdetails', [userdetailscontroler::class, 'userdetail'])->name('userdetails.userdetail');
Route::get('userdetails/create', [userdetailscontroler::class, 'create'])->name('userdetails.create');
Route::post('userdetails', [userdetailscontroler::class, 'store'])->name('userdetails.store');
Route::get('userdetails/{id}/edit', [userdetailscontroler::class, 'edit'])->name('userdetails.edit');
Route::put('userdetails/{id}', [userdetailscontroler::class, 'update'])->name('userdetails.update');
Route::get('userdetails/{id}/delete', [userdetailscontroler::class, 'delete'])->name('userdetails.delete');


//for price 
Route::get('/pricing', [PriceController::class, 'index'])->name('pricing.index');
Route::get('/pricing/create', [PriceController::class, 'create'])->name('pricing.create');
Route::post('/pricing/store', [PriceController::class, 'store'])->name('pricing.store');
Route::get('/pricing/edit/{id}', [PriceController::class, 'edit'])->name('pricing.edit');
Route::post('/pricing/update/{id}', [PriceController::class, 'update'])->name('pricing.update');
Route::get('/pricing/delete/{id}', [PriceController::class, 'delete'])->name('pricing.delete');

//for Setting
Route::get('/settings', [SettingController::class, 'system'])->name('setting.systemSetting');
Route::post('/setting/store', [SystemSettingController::class, 'store'])->name('setting.systemSetting.store');

// fro bookingservices
Route::view('/booking','frontend.booking')->name('booking.index');
Route::post('/booking-post',[bookingController::class,'store'])->name('booking.store');

// for display bookin in aminpanel
Route::get('/bookingdetails', [bookingController::class, 'bookingDetail'])->name('booking.bookingStatus');
Route::get('booking/create', [bookingController::class, 'create'])->name('booking.create');
Route::post('bookingdetails', [bookingController::class, 'store'])->name('booking.store');
Route::get('bookingdetails/{id}/edit', [bookingController::class, 'edit'])->name('booking.editbooking');
Route::put('bookingdtails/{id}', [bookingController::class, 'update'])->name('booking.update');
Route::get('bookingdetails/{id}/delete', [bookingController::class, 'delete'])->name('booking.delete');

//for wishlist
Route::get('/wishlist', [WhishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/add/{productId}', [WhishlistController::class, 'addToWishlist'])->name('wishlist.add')->middleware('auth');
Route::post('/wishlist/remove/{productId}', [WhishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
Route::post('/wishlist/clear', [WhishlistController::class, 'clearWishlist'])->name('wishlist.clear');
Route::post('/wishlist/check/{productId}', [WhishlistController::class, 'checkWishlist'])->name('wishlist.check');

