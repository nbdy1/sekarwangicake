<?php

use App\Http\Controllers\ProductsController;
use App\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/addcustomcake', function(){
    return view('addcustomcake');
});

Route::get('/addpastry', function(){
    return view('addpastry');
});

Route::get('/about', function(){
    return view('about');
});


// Route::match(['get', 'post'], '/addcake', function () {
    
// });

Route::get('/adminhome', function(){
    return view('adminhome');
});


Route::get('/addcake', [ProductsController::class, 'showAddCakePage']);
Route::post('/addcake', [ProductsController::class, 'addProduct']);

// Route::resource('addcake', ProductsController::class);