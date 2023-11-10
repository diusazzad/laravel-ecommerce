@extends('layouts.admin')

@section('content')
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Category Name
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Slug
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Subcategory Count
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Product Count
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Updated At
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($categories as $category)
                <tr>
                    @if (!is_bool($category))
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->category_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->slug }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->subcategory_count }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->product_count }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->updated_at }}</td>
                    @endif
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('admin.categories.edit', $category->id ?? 0) }}"
                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id ?? 0) }}" method="POST"
                            class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
