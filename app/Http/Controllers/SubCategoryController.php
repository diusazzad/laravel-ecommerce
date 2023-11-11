<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function subCategoryDashboard(){

        $subcategories = Subcategory::latest()->get();

        return view('admin.subcategory.dashboard', compact('subcategories'));

    }

    public function addSubCategoryDashboard(){
        $categories = Category::all();
        return view('admin.subcategory.add', compact('categories'));
    }

    public function subCategoryStore(Request $request)
    {
        $validatedData = $request->validate([
            'subcategory_name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subcategory::create($validatedData);

        return redirect()->route('admin.subcategory.dashboard');
    }
}
