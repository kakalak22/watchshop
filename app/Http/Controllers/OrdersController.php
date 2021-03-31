<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function orders()
    {
        $orders = Orders::with('orders_products')->where('user_id', Auth::user()->id)->get()->toArray();
        // dd($orders);die;
        return view('pages.ordershistory')->with(compact('orders'));
    }
}