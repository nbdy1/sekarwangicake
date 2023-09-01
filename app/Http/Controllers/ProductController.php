<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
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
    public function showAddSimpleCakePage()
    {
        return view('admin.add_simple_cake');
    }

    public function showAddCustomeCakePage()
    {
        return view('admin.add_custom_cake');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function addProduct(Request $req)
    {
        
        $this->validate($req, [
            'productName' => 'required',
            'productDescription' => 'required',
            'productType' => 'required',
            'productSlug' => 'required',
            'productPrice' => 'required',
            'productTheme' => 'nullable',
        ]);

    
        // Product::create([
        //     'ProductName' => $req->cakeName,
        //     'ProductDescription' => $req->cakeDescription,
        //     'ProductType' => $req->cakeType,
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