<?php

namespace App\Http\Controllers;

use App\Models\CakeTestimonial;
use App\Models\Product;
use App\Models\CustomCake;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomCakeController extends Controller
{
    public function index()
    {
        $products = Product::all()->where('product_type', 'custom_cake')->sortByDesc('updated_at');
        return view('admin.custom_cake')->with('products', $products);
    }
    public function create()
    {
        return view('admin.add_custom_cake');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'customCakeName' => 'required|string|max:255',
            'customCakeSlug' => 'required|string|unique:products,product_slug|max:255',
            'customCakeDescription' => 'required|string',
            'customCakePrice' => 'nullable|numeric|min:0',
            'customCakeOriPrice' => 'nullable|numeric|min:0',
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
            'testimonial_client_name' => 'nullable|string',
            'testimonial_client_avatar' => 'nullable|image',
            'testimonial_client_avatar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'testimonial_quote' => 'nullable',
            'testimonial_rating_star' => 'nullable',
        ]);
        
        $product = new Product([
            "product_name" => $r->customCakeName,
            "product_type" => "custom_cake",
            "product_slug" => $r->customCakeSlug,
            "product_description" => $r->customCakeDescription,
            
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
        $testimonials = new CakeTestimonial;
        if($r->testimonial_client_name){
            if($r->testimonial_client_avatar){
                $testimonials->cake_testimonials()->create(["product_id" => $product->id, "testimonial_client_name" => $r->clientName, 
                                                "testimonial_client_avatar" => $r->testimonial_client_avatar, "testimonial_quote" => $r->testimonialQuote,
                                                "testimonial_rating_star" => $r->ratingStar]);
            }
            else{
                $testimonials->cake_testimonials()->create(["product_id" => $product->id, "testimonial_client_name" => $r->clientName, 
                                                "testimonial_quote" => $r->testimonialQuote,
                                                "testimonial_rating_star" => $r->ratingStar]);
            }
        }
        
        
        return redirect('/admin/custom-cake')->with('message', "Custom Cake \"".$product->product_name."\" added succesfully!");
    }
}

