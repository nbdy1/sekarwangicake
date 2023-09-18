<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PastryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Product::all()->where('product_type', 'pastry')->sortByDesc('updated_at');
        // $products = Product::all()->sortByDesc('updated_at');
        return view('admin.pastry')->with('products', $products);
    }

    public function create(){
        return view('admin.add_pastry');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        $r->validate([
            'pastryName' => 'required|string|max:255',
            'pastrySlug' => 'required|string|unique:products,product_slug|max:255',
            'pastryDescription' => 'required|string',
            'pastryPrice' => 'required|numeric|min:0',
            'pastryOriPrice' => 'nullable|numeric|min:0',
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
        ]);

        $product = new Product([
            "product_name" => $r->pastryName,
            "product_type" => "pastry",
            "product_slug" => $r->pastrySlug,
            "product_description" => $r->pastryDescription,
            "product_selling_price" => $r->pastryPrice,
            "product_original_price" => $r->pastryOriPrice,
        ]);
        $product->save();

        if ($r->hasFile("image")){
            $uploadPath = 'uploads/products/';

            $files = $r->file("image");
            // ddd($files);
            $i = 1;
            foreach($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $file->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;


                $product->product_images()->create(["product_id" => $product->id, "image" => $finalImagePathName]);
            }
        }
        return redirect('/admin/pastry')->with('message', "Pastry \"".$product->product_name."\" added succesfully!");
    }
}
