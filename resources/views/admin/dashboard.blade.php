@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Total Sales</h2>
            <p class="text-3xl font-bold text-blue-500">$1,234,567</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">New Orders</h2>
            <p class="text-3xl font-bold text-green-500">123</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Pending Invoices</h2>
            <p class="text-3xl font-bold text-yellow-500">5</p>
        </div>

        <!-- Widget -->
        <div class="bg-white p-6 rounded-md shadow-md col-span-2">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <!-- Add widget content here, e.g., a list of recent activities -->
            <ul class="list-disc pl-6">
                <li>User John Doe registered</li>
                <li>Order #123 shipped</li>
                <li>New customer inquiry</li>
            </ul>
        </div>

    </div>
@endsection
