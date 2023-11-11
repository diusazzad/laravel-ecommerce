<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $recentUsers = User::latest()->take(5)->get();
        $categoryCount = Category::count();
        $subcategoryCount = Subcategory::count();

        return view('admin.dashboard', [
            'categoryCount' => $categoryCount,
            'subcategoryCount' => $subcategoryCount,
            'recentUsers' => $recentUsers
        ]);
    }



}
