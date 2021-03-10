<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

session_start();
class CartController extends Controller
{
    public function showCart(){
        return view('pages.showcart');
    }
    public function addToCart($id){
        $product = Product::find($id);
        $brand_id = $product->brand_id;
        $brand = Brand::find($brand_id);
        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['qty'] = 1;
        $data['price'] = $product->price;
        $data['weight'] = 0;
        $data['options']['image'] = $product->feature_image;
        $data['options']['brand'] = $brand->name;
        Cart::add($data);
        echo '<pre>';
        print_r(Cart::content());
    }

    public function deleteItem($rowId){
        Cart::remove($rowId);
        return Redirect::to('/show-cart');
    }
}
