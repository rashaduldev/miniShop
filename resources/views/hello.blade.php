@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Section 1: Hero -->
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-5xl font-bold mb-4">Welcome to MiniShop</h1>
        <p class="text-xl mb-6">Your one-stop shop for quality products online.</p>
        <a href="#products" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Shop Now</a>
    </div>
</section>

<!-- Section 2: Features -->
<section id="features" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-white rounded shadow">
                <h3 class="font-bold text-xl mb-2">Free Shipping</h3>
                <p>Fast and reliable shipping worldwide.</p>
            </div>
            <div class="p-6 bg-white rounded shadow">
                <h3 class="font-bold text-xl mb-2">Secure Payment</h3>
                <p>100% secure payment methods.</p>
            </div>
            <div class="p-6 bg-white rounded shadow">
                <h3 class="font-bold text-xl mb-2">Quality Products</h3>
                <p>Top-quality products at best prices.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: About -->
<section id="about" class="py-20">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2">
            <img src="https://via.placeholder.com/600x400" alt="About Us" class="rounded shadow">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-4">About MiniShop</h2>
            <p class="text-gray-700 mb-4">MiniShop is an online store offering a variety of high-quality products. Our mission is to provide convenience, quality, and great customer service.</p>
            <a href="#products" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Explore Products</a>
        </div>
    </div>
</section>

<!-- Section 4: Products -->
<section id="products" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">Our Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @php
            $products = [
                ['name'=>'Wireless Headphones','price'=>49.99,'image'=>'https://via.placeholder.com/300x200?text=Headphones'],
                ['name'=>'Smart Watch','price'=>99.99,'image'=>'https://via.placeholder.com/300x200?text=Smart+Watch'],
                ['name'=>'Gaming Mouse','price'=>29.99,'image'=>'https://via.placeholder.com/300x200?text=Gaming+Mouse'],
                ['name'=>'Mechanical Keyboard','price'=>79.99,'image'=>'https://via.placeholder.com/300x200?text=Keyboard'],
                ['name'=>'Bluetooth Speaker','price'=>39.99,'image'=>'https://via.placeholder.com/300x200?text=Speaker'],
                ['name'=>'Laptop Stand','price'=>19.99,'image'=>'https://via.placeholder.com/300x200?text=Laptop+Stand'],
                ['name'=>'USB-C Hub','price'=>24.99,'image'=>'https://via.placeholder.com/300x200?text=USB-C+Hub'],
                ['name'=>'Webcam','price'=>59.99,'image'=>'https://via.placeholder.com/300x200?text=Webcam'],
            ];
            @endphp
            @foreach($products as $product)
            <div class="border rounded shadow p-4 flex flex-col">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-48 w-full object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h3>
                <p class="text-gray-700 mb-4">${{ number_format($product['price'],2) }}</p>
                <a href="{{ url('/cart/add/'.$loop->index+1) }}" class="mt-auto bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-center">
                    Add to Cart
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section 5: Testimonials -->
<section id="testimonials" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded shadow">
                <p>"Great service and fast delivery!"</p>
                <h4 class="font-bold mt-2">- John Doe</h4>
            </div>
            <div class="p-6 bg-white rounded shadow">
                <p>"Quality products at amazing prices."</p>
                <h4 class="font-bold mt-2">- Jane Smith</h4>
            </div>
            <div class="p-6 bg-white rounded shadow">
                <p>"I love shopping here. Highly recommended!"</p>
                <h4 class="font-bold mt-2">- Mike Johnson</h4>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Call to Action -->
<section class="py-20 bg-blue-600 text-white text-center">
    <h2 class="text-3xl font-bold mb-4">Start Shopping Today!</h2>
    <p class="mb-6">Browse our wide range of products and enjoy exclusive deals.</p>
    <a href="#products" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Shop Now</a>
</section>

<!-- Section 7: Blog/News -->
<section id="blog" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">Latest News</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded shadow p-4">
                <img src="https://via.placeholder.com/400x200" alt="News" class="rounded mb-4">
                <h3 class="font-bold mb-2">How to Choose the Best Headphones</h3>
                <p class="text-gray-700 text-sm">Tips for choosing high-quality headphones for your needs.</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="https://via.placeholder.com/400x200" alt="News" class="rounded mb-4">
                <h3 class="font-bold mb-2">Top 5 Smart Watches in 2026</h3>
                <p class="text-gray-700 text-sm">Check out the best smart watches available this year.</p>
            </div>
            <div class="bg-white rounded shadow p-4">
                <img src="https://via.placeholder.com/400x200" alt="News" class="rounded mb-4">
                <h3 class="font-bold mb-2">Gaming Setup Ideas</h3>
                <p class="text-gray-700 text-sm">Create the ultimate gaming setup at home.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: FAQ -->
<section id="faq" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">Frequently Asked Questions</h2>
        <div class="space-y-4 max-w-3xl mx-auto">
            <div>
                <h3 class="font-semibold">Do you offer free shipping?</h3>
                <p class="text-gray-700">Yes! Free shipping on all orders over $50.</p>
            </div>
            <div>
                <h3 class="font-semibold">What payment methods do you accept?</h3>
                <p class="text-gray-700">We accept all major credit cards and PayPal.</p>
            </div>
            <div>
                <h3 class="font-semibold">Can I return a product?</h3>
                <p class="text-gray-700">Yes, within 30 days of purchase.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 9: Newsletter -->
<section class="py-20 bg-blue-600 text-white text-center">
    <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
    <p class="mb-6">Get updates about new products and offers.</p>
    <form class="flex flex-col sm:flex-row justify-center items-center gap-4">
        <input type="email" placeholder="Enter your email" class="p-3 rounded text-gray-800 w-full sm:w-auto">
        <button type="submit" class="bg-white text-blue-600 px-6 py-3 rounded hover:bg-gray-100 font-semibold">Subscribe</button>
    </form>
</section>

<!-- Section 10: Contact -->
<section id="contact" class="py-20 bg-gray-100">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-4">Get in Touch</h2>
        <p class="mb-6 text-gray-700">Have questions? Contact our support team.</p>
        <form class="space-y-4">
            <input type="text" placeholder="Your Name" class="w-full p-3 rounded border">
            <input type="email" placeholder="Your Email" class="w-full p-3 rounded border">
            <textarea placeholder="Message" class="w-full p-3 rounded border"></textarea>
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 font-semibold">Send Message</button>
        </form>
    </div>
</section>

@endsection