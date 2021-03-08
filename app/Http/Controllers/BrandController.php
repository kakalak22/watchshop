<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AllBrandProduct(){
        $cate = Product::all()->sortBy('brand_id');
        return view('pages.productlist',compact('cate'));
    }
    
    public function ProductByBrand($brand_id){
        $cate = Product::where('brand_id',$brand_id)->get();
        return view('pages.productlist',compact('cate'));
    }
}
