@extends('layouts.app')

@section('content')
<section class="bg-white shadow">
    <div class="bg-sky-800 container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="/images/logo.png" alt="Logo" class="h-10">
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home.index') }}" class="text-white hover:text-[#ff2e94]">Beranda</a></li>
                    <li><a href="{{ route('concerts.index') }}" class="text-white hover:text-[#ff2e94]">Event</a></li>
                    <li><a href="#" class="text-white hover:text-[#ff2e94]">Tentang Kami</a></li>
                    <li><a href="#" class="text-white hover:text-[#ff2e94]">Bantuan</a></li>
                </ul>
            </nav>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="text-white hover:text-[#ff2e94]">Masuk</a>
            <button class="text-white px-4 py-2 rounded-full hover:bg-[#e0006c]">Daftar</button>
        </div>
    </div>
</section>

<!-- Search Bar -->
<section class="bg-[#1e186a] py-6">
    <div class="container mx-auto px-6">
        <div class="w-full">
            <input type="text" placeholder="Cari konser yang anda suka" class="p-3 rounded-lg w-full">
        </div>
    </div>
</section>

<section class="min-h-screen bg-white pt-28">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Upcoming Events</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @for ($i = 0; $i < 20; $i++)
                <div class="bg-white shadow-md rounded-xl overflow-hidden">
                <img src="/images/event-poster.png" alt="Event Poster" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="text-xs text-indigo-700 font-bold">APR</div>
                    <div class="text-lg font-extrabold leading-tight -mt-1">14</div>
                    <h3 class="text-sm font-semibold mt-2">Flow "Anime Shibari 2024 - 2025" - Tasikmalaya</h3>
                </div>
                <div class="p-2 bg-blue-800">
                    <div class="flex justify-between items-center p-2 bg-blue-400 rounded-lg">
                        <button class="bg-sky-800 text-black px-4 py-2 rounded-full text-sm font-semibold">Lihat Detail Event</button>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

<footer class="mt-24 bg-[#0E0B57] text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="text-sm leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vestibulum tincidunt ante ac placerat. Nunc tincidunt tortor eu felis gravida consequat.
        </div>
        <div>
            <h4 class="font-bold mb-2">Rencana Events</h4>
            <ul class="text-sm space-y-1">
                <li>Create and Set Up</li>
                <li>Sell Tickets</li>
                <li>Online RSVP</li>
                <li>Online Events</li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold mb-2">TixHub</h4>
            <ul class="text-sm space-y-1">
                <li>About Us</li>
                <li>Press</li>
                <li>Contact Us</li>
                <li>Help Center</li>
                <li>How it Works</li>
                <li>Privacy</li>
                <li>Terms</li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold mb-2">Stay In The Loop</h4>
            <p class="text-sm mb-2">Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
            <div class="flex items-center space-x-2">
                <input type="email" placeholder="Masukkan Email" class="p-2 rounded-full text-black w-full">
                <button class="bg-[#F72585] px-4 py-2 rounded-full text-white text-sm font-semibold">Subscribe Now</button>
            </div>
        </div>
    </div>
</footer>
@endsection