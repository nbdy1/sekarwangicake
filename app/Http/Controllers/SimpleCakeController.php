<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class SimpleCakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.simple_cake')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_simple_cake');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product([
            "product_name" => $request->simpleCakeName,
            "product_type" => "simple_cake",
             "product_slug" => $request->simpleCakeSlug,
             "product_description" => $request->simpleCakeDescription,
             "product_price" => $request->simpleCakePrice,
              ]);
        $product->save();

        if ($request->hasFile("images")){
            $files = $request->file("images");
            foreach($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['product_id'] = $product->product_id;
                $request['image'] = $imageName;
                $file->move(\public_path("images"),$imageName);
                ProductImage::create($request->all());
            }
        }
        
        return redirect('/admin/simple-cake')->with('message', "Simple Cake \"".$product->product_name."\" added succesfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('edit')->with('products',$products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
