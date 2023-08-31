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

    public function showAddCustomeCakePage()
    {
        return view('addcustomcake');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function addProduct(Request $req)
    {
        
        $this->validate($req, [
            'productName' => 'required',
            'productDescription' => 'required',
            'productImage' => 'required|image',
            'productType' => 'required',
            'productSlug' => 'required',
            'productPrice' => 'required',
            'productTheme' => 'nullable',
        ]);

        $file = $req->file('productImage');
        $filename = $req->productName . '.' . $file->extension();
        $uploadDirectory = 'assets';
        $file->move($uploadDirectory, $filename);

        foreach ($req->file('productImage') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('/images/resource', ['disk' => 'my_files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }

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
