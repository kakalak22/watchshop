<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('pages.home');
    }
    public function AdminHome()
    {
        return view('admin.admin_home');
    }
}
