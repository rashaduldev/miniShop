@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl mb-6">We’d love to hear from you! Reach out to us anytime.</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 max-w-5xl grid grid-cols-1 md:grid-cols-2 gap-12">
        
        <!-- Contact Info -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold mb-4">Get in Touch</h2>
            <p class="text-gray-700">Have questions or feedback? Our support team is here to help.</p>
            <div>
                <h3 class="font-semibold mb-1">Email</h3>
                <p class="text-gray-700">support@minishop.com</p>
            </div>
            <div>
                <h3 class="font-semibold mb-1">Phone</h3>
                <p class="text-gray-700">+880 123 456 789</p>
            </div>
            <div>
                <h3 class="font-semibold mb-1">Address</h3>
                <p class="text-gray-700">Dhaka, Bangladesh</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div>
            <form class="space-y-4 bg-white p-6 rounded shadow">
                @csrf
                <input type="text" name="name" placeholder="Your Name" class="w-full p-3 rounded border">
                <input type="email" name="email" placeholder="Your Email" class="w-full p-3 rounded border">
                <textarea name="message" placeholder="Your Message" class="w-full p-3 rounded border"></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 font-semibold w-full">Send Message</button>
            </form>
        </div>

    </div>
</section>

<!-- Map Section (Optional) -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Our Location</h2>
        <div class="w-full h-96 rounded overflow-hidden shadow">
            <iframe class="w-full h-full" src="https://maps.google.com/maps?q=Dhaka,Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>

@endsection