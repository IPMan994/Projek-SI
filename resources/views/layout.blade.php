<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TixHub</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-bold text-lg">KonserBooking</a>
            <nav>
                <a href="{{ route('concerts.index') }}" class="text-white hover:text-gray-300 mx-4">Concerts</a>
                <a href="{{ route('bookings.index') }}" class="text-white hover:text-gray-300">Bookings</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-blue-600 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; 2025 KonserBooking. All rights reserved.
        </div>
    </footer>
</body>
</html>
