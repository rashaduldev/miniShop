@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1 class="text-3xl font-bold mb-6">Products</h1>

@if(session('success'))
<div class="bg-green-100 text-green-800 p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    @php
    $dummyProducts = [
        ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 49.99, 'image' => 'https://via.placeholder.com/300x200?text=Headphones'],
        ['id' => 2, 'name' => 'Smart Watch', 'price' => 99.99, 'image' => 'https://via.placeholder.com/300x200?text=Smart+Watch'],
        ['id' => 3, 'name' => 'Gaming Mouse', 'price' => 29.99, 'image' => 'https://via.placeholder.com/300x200?text=Gaming+Mouse'],
        ['id' => 4, 'name' => 'Mechanical Keyboard', 'price' => 79.99, 'image' => 'https://via.placeholder.com/300x200?text=Keyboard'],
        ['id' => 5, 'name' => 'Bluetooth Speaker', 'price' => 39.99, 'image' => 'https://via.placeholder.com/300x200?text=Speaker'],
        ['id' => 6, 'name' => 'Laptop Stand', 'price' => 19.99, 'image' => 'https://via.placeholder.com/300x200?text=Laptop+Stand'],
        ['id' => 7, 'name' => 'USB-C Hub', 'price' => 24.99, 'image' => 'https://via.placeholder.com/300x200?text=USB-C+Hub'],
        ['id' => 8, 'name' => 'Webcam', 'price' => 59.99, 'image' => 'https://via.placeholder.com/300x200?text=Webcam'],
    ];
    @endphp

    @foreach($dummyProducts as $product)
    <div class="border rounded shadow p-4 flex flex-col">
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-48 w-full object-cover mb-4 rounded">
        <h2 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h2>
        <p class="text-gray-700 mb-4">${{ number_format($product['price'], 2) }}</p>
        <a href="{{ url('/cart/add/'.$product['id']) }}" class="mt-auto bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-center">
            Add to Cart
        </a>
    </div>
    @endforeach

</div>
@endsection