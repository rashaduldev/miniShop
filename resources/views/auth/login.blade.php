@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="flex items-center justify-center py-20">
    <div class="w-full max-w-md bg-white p-8 rounded shadow">
        <h2 class="text-3xl font-bold mb-6 text-center">Login to Your Account</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password" class="w-full p-3 border rounded">
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 font-semibold">Login</button>
        </form>

        <p class="mt-4 text-center text-gray-600">Don't have an account? 
            <a href="{{ url('/register') }}" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>
</section>
@endsection