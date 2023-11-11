@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

    <!-- Card 1 -->
    <div class="p-6 bg-white rounded-md shadow-md">
        <h2 class="mb-4 text-lg font-semibold text-gray-800">Total Categories</h2>
        <p class="text-3xl font-bold text-blue-500">{{ $categoryCount }}</p>
    </div>


    <!-- Card 2 -->
    <!-- Card 2 -->
    <div class="p-6 bg-white rounded-md shadow-md">
        <h2 class="mb-4 text-lg font-semibold text-gray-800">Total Sub Category</h2>
        <p class="text-3xl font-bold text-green-500">{{ $subcategoryCount }}</p>
    </div>

    <!-- Card 3 -->
    <div class="p-6 bg-white rounded-md shadow-md">
        <h2 class="mb-4 text-lg font-semibold text-gray-800">Total Products</h2>
        <p class="text-3xl font-bold text-yellow-500">5</p>
    </div>

    <!-- Widget -->
    <div class="col-span-2 p-6 bg-white rounded-md shadow-md">
        <h2 class="mb-4 text-lg font-semibold text-gray-800">Recent Users</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Name
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Email
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Registered At
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if (count($recentUsers) > 0)
                @foreach ($recentUsers as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->created_at }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap" colspan="3">No recent users found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>
@endsection
