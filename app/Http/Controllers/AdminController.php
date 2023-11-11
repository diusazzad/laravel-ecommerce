<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }


    // public function subCategoryDashboard(){
    //     return view('admin.category.dashboard');
    // }

    // public function addSubCategoryDashboard(){
    //     return view('admin.category.add');
    // }



    public function orderDashboard(){
        return view('admin.order.dashboard');
    }
    public function pendingOrderDashboard(){
        return view('admin.order.dashboard');
    }
}
