<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDashboard(){
        $products = Product::all();

        return view('admin.product.dashboard', compact('products'));
    }


    public function addProductDashboard(){
        return view('admin.product.add');
    }

    public function storeProduct(Request $request)
    {
        // Validate the form data
    $request->validate([
        'product_name' => 'required|string|max:255',
        'product_short_des' => 'required|string',
        'product_long_des' => 'required|string',
        'price' => 'required|numeric',
        'product_category_id' => 'required|exists:categories,id', // Ensure the selected category exists
        'product_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image upload
        'slug' => 'required|string|unique:products,slug', // Unique slug in the products table
    ]);

    // Save the product to the database
    $product = new Product;
    $product->product_name = $request->input('product_name');
    $product->product_short_des = $request->input('product_short_des');
    $product->product_long_des = $request->input('product_long_des');
    $product->price = $request->input('price');
    $product->product_category_id = $request->input('product_category_id');

    // Handle image upload
    $imagePath = $request->file('product_img')->store('products', 'public');
    $product->product_img = $imagePath;

    $product->slug = $request->input('slug');
    $product->save();

    return redirect()->route('admin.product.add')->with('success', 'Product added successfully!');

    }
}
