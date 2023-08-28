<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showAddCakePage()
    {
        return view('addcake');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addProduct(Request $req)
    {
        
        $this->validate($req, [
            'productName' => 'required',
            'productDescription' => 'required',
            'productImage' => 'required',
            'productType' => 'required|image',
            'productSlug' => 'required',
            'productPrice' => 'required|image',
            'productTheme' => 'required',
        ]);

        $file = $req->file('cakeImage');
        $filename = $req->cakeName . '.' . $file->extension();
        $uploadDirectory = 'assets';
        $file->move($uploadDirectory, $filename);

        $file = $req->file('testimonialImage');
        $filename_testimonial = $req->testimonialImage . '.' . $file->extension();
        $uploadDirectory = 'assets';
        $file->move($uploadDirectory, $filename_testimonial);

        // Product::create([
        //     'ProductName' => $req->cakeName,
        //     'ProductDescription' => $req->cakeDescription,
        //     'ProductImage' => $filename,
        //     'ProductType' => $req->,
        //     'ProductSlug' => $req->,
        //     'ProductPrice' => $req->,
        //     'ProductThemes' => $req->,
        // ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
