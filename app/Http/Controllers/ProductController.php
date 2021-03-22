<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetail($product_id)
    {
        $pro = Product::where('id', $product_id)->with('category')->with('brand')->get();
        //dd($pro);
        $image = ProductImage::where('product_id',$product_id)->get();
        //dd($image);
        return view('pages.productdetails', compact('pro'), compact('image'));
    }

    function search(Request $req)
    {
        $data = Product::where('name','like','%'.$req ->input('query').'%')->get();
        return view('pages.search',['products'=>$data]);
    }
}