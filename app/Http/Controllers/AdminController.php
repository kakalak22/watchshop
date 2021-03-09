<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminHome()
    {
        \dd(bcrypt('admin'));
        return view('admin.admin_home');
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function postLoginAdmin(Request $request)
    {

        // $credentials = $request->only('name', 'password')

        $remember = $request->has('remember-me') ? true : false;
        echo "<pre>";
        // print_r($request->password);
        if (\auth()->attempt([
            'username' => $request->username,
            'password' => $request->password
        ], $remember)) {
            die(123);
            return \redirect()->to('admin.admin_home');
        }
    }
}
