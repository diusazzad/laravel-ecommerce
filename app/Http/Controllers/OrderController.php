<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function orderDashboard(){
        return view('admin.order.dashboard');
    }
    public function pendingOrderDashboard(){
        return view('admin.order.dashboard');
    }
}
