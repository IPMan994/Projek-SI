@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-blue-600 to-indigo-700 text-white min-h-screen flex items-center justify-center px-4">
    <div class="max-w-2xl text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di <span class="text-yellow-300">TixHub</span>!</h1>
        <p class="text-lg md:text-xl mb-6">Pesan tiket konser favoritmu dengan mudah, cepat, dan aman!</p>
        <a href="{{ route('concerts.index') }}"
        class="inline-block bg-yellow-300 text-indigo-900 font-semibold px-6 py-3 rounded-lg shadow hover:bg-yellow-400 transition">
            Lihat Konser
        </a>
    </div>
</div>
@endsection
