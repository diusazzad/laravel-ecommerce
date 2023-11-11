@extends('layouts.admin')


@section('content')
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Short Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_short_des }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->product_category_name }}</td>
                    <td><img src="{{ $product->product_img }}" alt="{{ $product->product_name }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

