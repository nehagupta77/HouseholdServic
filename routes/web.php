<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::view('/master', 'backend.layouts.master');
// Route::view('/dashboard', 'dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




