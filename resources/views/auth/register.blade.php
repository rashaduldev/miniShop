@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="flex items-center justify-center py-20">
    <div class="w-full max-w-md bg-white p-8 rounded shadow">
        <h2 class="text-3xl font-bold mb-6 text-center">Create an Account</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/register') }}" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Full Name" class="w-full p-3 border rounded" value="{{ old('name') }}">
            <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password" class="w-full p-3 border rounded">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-3 border rounded">
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 font-semibold">Register</button>
        </form>

        <p class="mt-4 text-center text-gray-600">Already have an account? 
            <a href="{{ url('/login') }}" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
</section>
@endsection