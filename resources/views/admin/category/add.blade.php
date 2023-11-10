@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.category.store') }}" method="POST" class="w-full max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="category_name" class="block mb-2 font-bold text-gray-700">Category Name</label>
            <input type="text" name="category_name" id="category_name" value="{{ old('category_name') }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="slug" class="block mb-2 font-bold text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="subcategory_count" class="block mb-2 font-bold text-gray-700">Subcategory Count</label>
            <input type="number" name="subcategory_count" id="subcategory_count" value="{{ old('subcategory_count', 0) }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="product_count" class="block mb-2 font-bold text-gray-700">Product Count</label>
            <input type="number" name="product_count" id="product_count" value="{{ old('product_count', 0) }}"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Create
                Category</button>
        </div>
    </form>
@endsection
