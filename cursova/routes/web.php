<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\NavController;

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

Route::get('/', [MainController::class, 'index'])->name('main');


Route::resource('admin/product', 'App\Http\Controllers\AdminController', ['parameters' => [
    'product' => 'id'
]]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/{link}', [NavController::class, 'index'])->name('go-to');

Route::get('/categories', function () {
    return view('layout.category');
})->name('category');

Route::get('/about', function () {
    return view('user_nav.about');
})->name('about');

Route::get('/contact', function () {
    return view('user_nav.contacts');
})->name('contact');

Route::get('/payment-and-delivery', function () {
    return view('user_nav.delivery');
})->name('delivery');

Route::get('/return', function () {
    return view('user_nav.return');
})->name('return');

Route::get('/news', function () {
    return view('user_nav.news');
})->name('news');
