<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;

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

Route::get('/dashboard', 'App\Http\Controllers\AdminController@index')
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
    'register' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('/category/{id}', [MainController::class, 'category_nav']
)->name('category');

Route::get('/search/', [MainController::class, 'search']
)->name('search');

Route::get('/in-progress', function () {
    return view('user_nav/in_progress');
})->name('in_progress');

Route::get('/product/{id}', [MainController::class, 'product_card']
)->name('product-card');

Route::get('/buy',function (){
    return view('script/buy');
})->name('buy');

Route::get('/buy/confirm',[PurchaseController::class, 'index'])->name('confirm-purchase');
