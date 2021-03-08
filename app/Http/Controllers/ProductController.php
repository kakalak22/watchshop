<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetail($product_id){
        $pro = Product::where('id',$product_id)->with('category')->with('brand')->with('product_image')->get();
        //dd($pro);
        return view('pages.productdetails',compact('pro'));
    }
}
