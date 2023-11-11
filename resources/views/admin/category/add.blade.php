@extends('layouts.admin')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Add Subcategory</h2>

        <form action="{{ route('admin.subcategory.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="subcategory_name" class="block text-sm font-medium text-gray-600">Subcategory Name</label>
                <input type="text" name="subcategory_name" id="subcategory_name" value="{{ old('subcategory_name') }}"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-600">Category</label>
                <select name="category_id" id="category_id"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    required>
                    <option value="" disabled>Select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Add Subcategory
                </button>
            </div>
        </form>
    </div>
@endsection
