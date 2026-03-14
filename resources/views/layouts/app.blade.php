<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MiniShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    {{-- Include Header --}}
    @include('layouts.header')

    {{-- Page Content --}}
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('layouts.footer')

</body>
</html>