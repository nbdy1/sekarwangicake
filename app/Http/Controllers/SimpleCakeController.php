<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SimpleCakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortByDesc('updated_at');
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
        $request->validate([
            'simpleCakeName' => 'required|string|max:255',
            'simpleCakeSlug' => 'required|string|unique:products,product_slug|max:255',
            'simpleCakeDescription' => 'required|string',
            'simpleCakePrice' => 'required|numeric|min:0',
            'simpleCakeOriPrice' => 'nullable|numeric|min:0',
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
        ]);
        
        $product = new Product([
            "product_name" => $request->simpleCakeName,
            "product_type" => "simple_cake",
             "product_slug" => $request->simpleCakeSlug,
             "product_description" => $request->simpleCakeDescription,
             "product_selling_price" => $request->simpleCakePrice,
             "product_original_price" => $request->simpleCakeOriPrice,
              ]);
        $product->save();

        if ($request->hasFile("image")){
            $uploadPath = 'uploads/products/';

            $files = $request->file("image");
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
        
        return redirect('/admin/simple-cake')->with('message', "Simple Cake \"".$product->product_name."\" added succesfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_slug)
    {
        try {
            $product = Product::where('product_slug', $product_slug)->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the product is not found.
            // For example, you can redirect to a 404 page or return an error message.
            return abort(404); // This will return a 404 HTTP response.
        }
    
        return view('admin.view_product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // TODO: make update controller, find product based on slug then product->update
    public function edit($product_slug)
    {
        $product = Product::where('product_slug', $product_slug)->first();
        return view('admin.edit_product')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Product $product)
    public function update(Request $request, $product_slug)
    {
        $request->validate([
            'simpleCakeName' => 'required|string|max:255',
            'simpleCakeSlug' => 'required|string|unique:products,product_slug|max:255',
            'simpleCakeDescription' => 'required|string',
            'simpleCakePrice' => 'required|numeric|min:0',
            'simpleCakeOriPrice' => 'nullable|numeric|min:0',
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
        ]);
        
        $product = Product::where('product_slug', $product_slug)->first();
        $product->product_name = $request->simpleCakeName;
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

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Product::class, 'product_slug', $request->name);
        // these parameters to check if its unique
        return response()->json(["slug" => $slug]);
    }
}
