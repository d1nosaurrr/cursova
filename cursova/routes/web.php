<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/dashboard',  'App\Http\Controllers\AdminController@index')
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/{link}', [NavController::class, 'index'])->name('go-to');

Route::get('/categories', function () {
    return view('layout.category', ['categories' => (new Category)->categories(),
        'subcategories' => (new Category)->subcategories(),
        'hit_products' => (new Product)->hit_products()]);
})->name('category');

Route::get('/in-progress', function () {
    return view('user_nav/in_progress');
})->name('in_progress');
