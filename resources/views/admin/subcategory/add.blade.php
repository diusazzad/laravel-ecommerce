@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.subcategory.store') }}" method="POST"
    class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
    @csrf
    <div class="mb-4">
        <label for="subcategory_name" class="block mb-2 font-bold text-gray-700">Subcategory Name:</label>
        <input type="text" name="subcategory_name" id="subcategory_name" value="{{ old('subcategory_name') }}" required
            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
        @error('subcategory_name')
        <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="category_id" class="block mb-2 font-bold text-gray-700">Category ID:</label>
        <input type="number" name="category_id" id="category_id" value="{{ old('category_id') }}" required
            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
        @error('category_id')
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
    <div class="mb-4">
        <label for="slug" class="block mb-2 font-bold text-gray-700">Slug:</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required
            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline">
        @error('slug')
        <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <button type="submit"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Create
            Subcategory</button>
    </div>
</form>

@endsection
