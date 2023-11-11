@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Add Product</h2>

        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="product_name" class="block text-sm font-medium text-gray-600">Product Name</label>
                <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="product_short_des" class="block text-sm font-medium text-gray-600">Product Short
                    Description</label>
                <textarea name="product_short_des" id="product_short_des" rows="3"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>{{ old('product_short_des') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="product_long_des" class="block text-sm font-medium text-gray-600">Product Long
                    Description</label>
                <textarea name="product_long_des" id="product_long_des" rows="6"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>{{ old('product_long_des') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="product_category_id" class="block text-sm font-medium text-gray-600">Product Category</label>
                <select name="product_category_id" id="product_category_id"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required>
                    <option value="" disabled>Select category</option>
                    {{-- @foreach ($categories as $category) --}}
                        {{-- <option value="{{ $category->id }}">{{ $category->category_name }}</option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>

            <div class="mb-4">
                <label for="product_img" class="block text-sm font-medium text-gray-600">Product Image</label>
                <input type="file" name="product_img" id="product_img"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    accept="image/*" required>
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-600">Slug</label>
                {{-- <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required> --}}
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Add Product
                </button>
            </div>
        </form>
    </div>
@endsection
