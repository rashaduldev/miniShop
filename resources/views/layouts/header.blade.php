<header class="bg-white shadow">
    <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center p-4">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-3xl font-bold text-gray-800 mb-2 sm:mb-0">MiniShop</a>

        <!-- Navigation -->
        <nav class="space-x-0 sm:space-x-6 flex flex-col sm:flex-row items-center w-full sm:w-auto">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-500 py-1">Home</a>
            <a href="{{ url('/products') }}" class="text-gray-700 hover:text-blue-500 py-1">Products</a>
            <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-500 py-1">About</a>
            <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-500 py-1">Contact</a>
            <a href="{{ url('/cart') }}" class="mt-2 sm:mt-0 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 flex items-center">
                Cart ({{ count(session()->get('cart', [])) }})
            </a>
        </nav>
    </div>
</header>