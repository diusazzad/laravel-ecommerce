@extends('layouts.admin')

@section('content')
<div class="max-w-md mx-auto">
    <form action="{{ route('admin.category.store') }}" method="POST"
        class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="category_name" class="block mb-2 font-bold text-gray-700">Category Name:</label>
            <input type="text" name="category_name" id="category_name" value="{{ old('category_name') }}" required
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
            @error('category_name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block mb-2 font-bold text-gray-700">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
            @error('slug')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="subcategory_count" class="block mb-2 font-bold text-gray-700">Subcategory Count:</label>
            <input type="number" name="subcategory_count" id="subcategory_count" value="{{ old('subcategory_count') }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
            @error('subcategory_count')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="product_count" class="block mb-2 font-bold text-gray-700">Product Count:</label>
            <input type="number" name="product_count" id="product_count" value="{{ old('product_count') }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
            @error('product_count')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Create
                Category</button>
        </div>
    </form>
</div>
@endsection
