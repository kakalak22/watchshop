<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    private $brand;
    private $product;
    private $category;
    private $user;

    public function __construct(Brand $brand, User $user, Categories $category, Product $product)
    {
        $this->brand = $brand;
        $this->product = $product;
        $this->category = $category;
        $this->user = $user;
    }

    public function getIndex()
    {
        $new_product = Product::orderBy('created_at', 'asc')->limit(8)->get();
        //dd($new_product);
        return view('pages.home', compact('new_product'));
    }

    public function AdminHome()
    {

        $brands = Brand::count();
        $products = Product::count();
        $categories = Categories::count();
        $users = User::count();

        return view('admin.admin_home', compact('brands', 'products', 'categories', 'users'));
    }



    public function getLoginAdmin()
    {
        return view('admin.demoHtml.admin_login');
    }

    public function postLoginAdmin(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($arr)) {
            return \redirect()->to('admin_home');
        } else {
            \dd("Login fail!!");
        }
    }

    public function logout()
    {
        Auth::logout();
        return \view('admin.demoHtml.admin_login');
    }
}
