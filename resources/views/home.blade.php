@extends('layouts.app')

@section('content')

<!-- Navigation Bar -->
<section class="bg-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="/images/logo.png" alt="Logo" class="h-10">
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-[#1e186a] hover:text-[#ff2e94]">Beranda</a></li>
                    <li><a href="#" class="text-[#1e186a] hover:text-[#ff2e94]">Event</a></li>
                    <li><a href="#" class="text-[#1e186a] hover:text-[#ff2e94]">Tentang Kami</a></li>
                    <li><a href="#" class="text-[#1e186a] hover:text-[#ff2e94]">Bantuan</a></li>
                </ul>
            </nav>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="text-[#1e186a] hover:text-[#ff2e94]">Masuk</a>
            <button class="bg-[#ff2e94] text-white px-4 py-2 rounded-full hover:bg-[#e0006c]">Daftar</button>
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

<!-- Hero Section -->
<section class="bg-[#f7f7ff]">
    <div class="w-full">
        <img src="/images/hero-banner.png" alt="Hero Banner" class="w-full object-cover">
    </div>
</section>


<!-- Upcoming Events -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-[#1e186a] mb-6">Upcoming Events</h2>
        <div class="flex space-x-4 mb-6">
            <select class="p-2 rounded">
                <option>Hari</option>
            </select>
            <select class="p-2 rounded">
                <option>Tipe Event</option>
            </select>
            <select class="p-2 rounded">
                <option>Kategori</option>
            </select>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-[#f8f8f8] rounded-lg overflow-hidden shadow">
                <img src="/images/event-poster.png" alt="Event Poster" class="w-full">
                <div class="p-4">
                    <span class="text-sm font-bold text-purple-800">APR 14</span>
                    <h3 class="text-md font-semibold mt-1">Flow "Anime Shibari 2024 - 2025" - Tasikmalaya</h3>
                </div>
        </div>
        @endfor
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('concerts.index') }}"><button class="border border-[#1e186a] text-[#1e186a] py-2 px-6 rounded-full hover:bg-[#1e186a] hover:text-white transition">Lainnya</button></a>
    </div>
    </div>
</section>

<!-- Create Event Banner -->
<section class="bg-[#f4e8fb] py-10">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-6 md:mb-0">
            <img src="/images/create-event.png" alt="Create Event">
        </div>
        <div class="md:w-1/2 text-center md:text-left">
            <h3 class="text-xl font-bold text-[#1e186a] mb-4">Buat Event Kamu Sendiri!</h3>
            <p class="text-sm text-[#444] mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="bg-[#ff2e94] text-white px-6 py-2 rounded-full hover:bg-[#e0006c]">Buat Events</button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-[#1e186a] text-white py-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div>
            <p class="text-sm leading-relaxed text-gray-300">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vestibulum, tincidunt ante ac placerat.
            </p>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Rencana Events</h4>
            <ul class="text-sm space-y-1">
                <li>Create and Set Up</li>
                <li>Sell Tickets</li>
                <li>Online RSVP</li>
                <li>Online Events</li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">TixHub</h4>
            <ul class="text-sm space-y-1">
                <li>About Us</li>
                <li>Press</li>
                <li>Contact Us</li>
                <li>Privacy</li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-2">Stay In The Loop</h4>
            <input type="email" placeholder="Masukkan Email" class="w-full p-2 rounded text-black">
            <button class="bg-[#ff2e94] text-white w-full mt-2 py-2 rounded-full">Subscribe Now</button>
        </div>
    </div>
</footer>
@endsection