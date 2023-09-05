<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimpleCakeController;


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
Route::get('/catalogue/product/{product:product_slug}', [CatalogueController::class, 'show']);


Route::get('/order', function () {
    return view('order');
});

// Route::get('/admin/product-add', function () {
//     return view('product_add');
// });


Route::get('/events', function () {
    return view('events');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/admin', function(){
    return view('admin.admin_home');
});

Route::get('/admin/simple-cake', [SimpleCakeController::class, 'index']);
Route::get('/admin/simple-cake/create', [SimpleCakeController::class, 'create']
);
Route::post('/admin/simple-cake/create', [SimpleCakeController::class, 'store']);
Route::post('/admin/simple-cake/', [SimpleCakeController::class, 'store']);

Route::get('/admin/simple-cake/check-slug', [SimpleCakeController::class, 'checkSlug']);
// Route::post('/admin/add-simple-cake', [ProductController::class, 'addSimpleCake']);