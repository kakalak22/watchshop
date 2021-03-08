<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ProductByCategory($category_id){
        $cate = Product::where('category_id',$category_id)->with('category')->get();
        //dd($cate);
        return view('pages.productlist',compact('cate'));
    }
}
