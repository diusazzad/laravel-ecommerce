<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryDashboard(){
        $categories = Category::all();

        return view('admin.category.dashboard', [
            'categories' => $categories,
        ]);

    }

    public function addCategoryDashboard(){
        return view('admin.category.add');
    }

    public function categoryStore(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|max:255',
            'slug' => 'required|unique:categories|max:255',
            'subcategory_count' => 'integer',
            'product_count' => 'integer',
        ]);

        $category = new Category();
        $category->category_name = $validatedData['category_name'];
        $category->slug = $validatedData['slug'];
        $category->subcategory_count = $validatedData['subcategory_count'] ?? 0;
        $category->product_count = $validatedData['product_count'] ?? 0;
        $category->save();

        return redirect()->route('admin.category.dashboard');
    }



// Pass the $categories variable to the current scope
    public function categoryEdit(Category $categories)
    {
        // Render the edit view
        return view('admin.category.dashboard', [
            'categories' => $categories,
        ]);
    }

    public function categoryDestroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Redirect back to the index page
        return redirect()->route('admin.category.dashboard');
    }

}
