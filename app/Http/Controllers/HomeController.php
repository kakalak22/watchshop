<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function getIndex()
    {
        $new_product = Product::orderBy('created_at','asc')->limit(8)->get();
        //dd($new_product);
        return view('pages.home', compact('new_product'));
    }

    public function AdminHome()
    {
        return view('admin.admin_home');
    }

    public function AdminLogin()
    {
        return view('admin.demoHtml.admin_login');
    }

    public function user()
    {
        return \view('admin.demoHtml.user');
    }

    public function admin()
    {
        return \view('admin.demoHtml.admin');
    }

    public function order()
    {
        return \view('admin.demoHtml.order');
    }
}
