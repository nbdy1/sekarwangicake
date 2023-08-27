<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogueController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Retrieve all products
    
        return view('catalogue', ['products' => $products]);
    }
    
}
