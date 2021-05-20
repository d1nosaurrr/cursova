<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Order;

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

Route::group([
    'middleware' => ['auth']
], function () {
    Route::resource('admin/product', 'App\Http\Controllers\AdminController', ['parameters' => [
        'product' => 'id'
    ]]);

    Route::get('admin/orders', function () {

        return view('admin.order', ['orders' => (new Order())->getOrder()]);})
        ->name('admin.orders');

    Route::get('/dashboard', [AdminController::class, 'index'])
        ->name('dashboard');
});

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
    'register' => true,
]);

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/search', [MainController::class, 'search'])
    ->name('search');

Route::get('/category/{id}', [MainController::class, 'category_nav'])
    ->name('category');

Route::get('/search/', [MainController::class, 'search'])
    ->name('search');

Route::get('/product/{id}', [MainController::class, 'product_card']
)->name('product-card');

Route::get('/add-to-cart/{id}', [PurchaseController::class, 'index'])
    ->name('add-to-cart');

Route::get('/cart/', [PurchaseController::class, 'getCart'])
    ->name('show-shop');

Route::get('/checkout/', [PurchaseController::class, 'getCheckout'])
    ->name('checkout');

Route::post('/checkout/', [PurchaseController::class, 'postCheckout'])
    ->name('checkout');
