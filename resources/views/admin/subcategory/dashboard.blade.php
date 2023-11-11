@extends('layouts.admin')

@section('content')
<table class="table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Subcategory Name</th>
            <th class="px-4 py-2">Category ID</th>
            <th class="px-4 py-2">Category Name</th>
            <th class="px-4 py-2">Product Count</th>
            <th class="px-4 py-2">Slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <td class="px-4 py-2 border">{{ $subcategory->id }}</td>
            <td class="px-4 py-2 border">{{ $subcategory->subcategory_name }}</td>
            <td class="px-4 py-2 border">{{ $subcategory->category_id }}</td>
            <td class="px-4 py-2 border">{{ $subcategory->category_name }}</td>
            <td class="px-4 py-2 border">{{ $subcategory->product_count }}</td>
            <td class="px-4 py-2 border">{{ $subcategory->slug }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
