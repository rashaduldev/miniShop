<footer class="bg-gray-900 text-gray-200 mt-12">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- About -->
        <div>
            <h3 class="font-bold text-lg mb-2">MiniShop</h3>
            <p class="text-gray-400">Your one-stop shop for the best products online. Quality and convenience guaranteed.</p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="font-bold text-lg mb-2">Quick Links</h3>
            <ul>
                <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ url('/products') }}" class="hover:text-white">Products</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-white">About</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="font-bold text-lg mb-2">Contact Us</h3>
            <p>Email: support@minishop.com</p>
            <p>Phone: +880 123 456 789</p>
            <p>Address: Dhaka, Bangladesh</p>
        </div>
    </div>

    <div class="text-center text-gray-500 mt-6 py-4 border-t border-gray-700">
        &copy; {{ date('Y') }} MiniShop. All rights reserved.
    </div>
</footer>