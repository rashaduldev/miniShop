<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop - @yield('title', 'Welcome')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <!-- Include Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main class="grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

</body>
</html>