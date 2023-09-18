<?php

namespace App\Http\Controllers;

use App\Models\CustomCake;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminHomeController extends Controller
{
    public function index()
    {

        $totalCustomCake = Product::where('product_type', 'custom_cake')->count(); // 
        $totalPastry = Product::where('product_type', 'pastry')->count(); // 
        $totalSimpleCake = Product::where('product_type', 'simple_cake')->count();; // 


        return view('admin.admin_home', [
            'totalCustomCake' => $totalCustomCake,
            'totalPastry' => $totalPastry,
            'totalSimpleCake' => $totalSimpleCake,
        ]);
    }
}
