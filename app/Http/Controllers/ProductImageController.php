<?php

namespace App\Http\Controllers;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductImageController extends Controller
{
    public function destroy($id)
    {
        $image = ProductImage::findOrFail($id);
        if (File::exists("/".$image->image)) {
            File::delete("/".$image->image);
        }

        ProductImage::find($id) ->delete();
        return back();
    }
}
