@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-5xl font-bold mb-4">About MiniShop</h1>
        <p class="text-xl mb-6">Learn more about our mission, vision, and values.</p>
    </div>
</section>

<!-- About Details -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <!-- Image -->
        <div class="md:w-1/2">
            <img src="https://via.placeholder.com/600x400" alt="About MiniShop" class="rounded shadow">
        </div>
        <!-- Text -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
            <p class="text-gray-700 mb-4">
                MiniShop is an online store dedicated to bringing you quality products with ease and convenience. 
                We focus on customer satisfaction, reliability, and offering the best online shopping experience.
            </p>
            <h2 class="text-2xl font-semibold mb-2">Our Mission</h2>
            <p class="text-gray-700 mb-4">
                To provide high-quality products at reasonable prices while maintaining excellent customer service.
            </p>
            <h2 class="text-2xl font-semibold mb-2">Our Vision</h2>
            <p class="text-gray-700 mb-4">
                To become the most trusted and convenient online shopping destination for customers worldwide.
            </p>
            <a href="#products" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 mt-4 inline-block">Shop Now</a>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-10">Meet Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @foreach(['Alice','Bob','Charlie','Diana'] as $member)
            <div class="bg-white rounded shadow p-4">
                <img src="https://via.placeholder.com/200x200" alt="{{ $member }}" class="rounded-full mx-auto mb-4">
                <h3 class="font-bold text-xl">{{ $member }}</h3>
                <p class="text-gray-700">Team Member</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection