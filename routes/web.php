<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;


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
    return view('home');
});

// Route::get('/catalogue', 'CatalogueController@index')->name('catalogue.index');
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');


Route::get('/order', function () {
    return view('order');
});

Route::get('/admin/product-add', function () {
    return view('product_add');
});


Route::get('/events', function () {
    return view('events');
});

Route::get('/about', function () {
    return view('about');
});
