<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


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
        $new_product = Product::orderBy('created_at', 'asc')->limit(4)->get();
        //dd($new_product);
        return view('pages.home', compact('new_product'));
    }

    public function AdminHome()
    {
        // $date = orders::where('status', 'active')
        //     ->where('created_at', '>', Carbon::now()->subDays(7))
        //     ->get();

        $orders = Orders::select(DB::raw('count(*) as total '), DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as created_date '))
            ->where('created_at', '>=', DB::raw('DATE(NOW()) - INTERVAL 7 DAY'))
            ->where('status', 1)
            ->groupBy('created_date')
            ->get();


        $brands = Brand::count();
        $products = Product::count();
        $categories = Categories::count();
        $users = User::count();

        return view('admin.admin_home', compact('brands', 'products', 'categories', 'users', 'orders'));
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
