<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Sentinal;
// use Illuminate\Support\Facades\Validator;
// use Cartalyst\Sentinal\Checkpoints\ThrottlingException;
// use Cartalyst\Sentinal\Checkpoints\NotActivatedException;

class HomeController extends Controller
{
    public function getIndex()
    {
        $new_product = Product::orderBy('created_at', 'asc')->limit(8)->get();
        //dd($new_product);
        return view('pages.home', compact('new_product'));
    }

    public function AdminHome()
    {
        return view('admin.admin_home');
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
