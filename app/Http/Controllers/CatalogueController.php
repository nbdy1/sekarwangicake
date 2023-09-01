<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogueController extends Controller
{
    public function index()
    {
        $products = Product::with('themes')->get(); // Retrieve all products with themes
        // dd($products);
    
        return view('catalogue', ['products' => $products]);
    }
    
}
