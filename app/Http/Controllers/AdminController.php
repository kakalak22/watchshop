<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminHome()
    {
        return view('admin.admin_home');
    }

    public function adminLogin()
    {
        return view('admin.admin_login');
    }
}
