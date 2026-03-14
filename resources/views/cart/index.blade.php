@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Price</th>
                    <th class="border p-2">Quantity</th>
                    <th class="border p-2">Total</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $id => $details)
                @php $total += $details['price'] * $details['quantity']; @endphp
                <tr class="text-center">
                    <td class="border p-2"><img src="{{ $details['image'] }}" class="h-16 w-16 object-cover mx-auto rounded"></td>
                    <td class="border p-2">{{ $details['name'] }}</td>
                    <td class="border p-2">${{ number_format($details['price'], 2) }}</td>
                    <td class="border p-2">{{ $details['quantity'] }}</td>
                    <td class="border p-2">${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                    <td class="border p-2">
                        <a href="{{ url('/cart/remove/'.$id) }}" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                            Remove
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right mt-4 text-xl font-bold">
            Total: ${{ number_format($total, 2) }}
        </div>
    </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection