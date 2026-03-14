@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')

<section class="flex flex-col items-center justify-center py-32 bg-gray-100 min-h-[70vh] text-center">
    <h1 class="text-9xl font-bold text-gray-300 mb-8">404</h1>
    <h2 class="text-4xl font-bold mb-4 text-gray-800">Oops! Page Not Found</h2>
    <p class="text-gray-600 mb-8">The page you are looking for does not exist or has been moved.</p>
    <a href="{{ url('/') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 font-semibold">
        Go Back Home
    </a>
</section>

@endsection