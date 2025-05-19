@extends('layouts.app')

@section('content')
<a href="{{ route('home.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"><-</a>
<div class="container mx-auto p-6">
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Gambar Event -->
        <div class="md:col-span-2">
            <img src="{{ asset('image/event/Poster 1.jpg/' . $event['image']) }}" alt="Event Banner" class="rounded-lg shadow-md">
        </div>

        <!-- Info Singkat -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold">{{ $event['title'] }}</h2>
            <p class="mt-2 text-sm text-gray-600">📅 {{ $event['date'] }}</p>
            <p class="text-sm text-gray-600">⏰ {{ $event['time'] }}</p>
            <p class="text-sm text-gray-600">📍 {{ $event['location'] }}</p>
            <p class="mt-4 text-xs text-gray-500">Diselenggarakan oleh</p>
            <p class="text-sm font-medium">{{ $event['organizer'] }}</p>

            <a href="{{ route('tickets.select') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Beli Tiket</a>
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="mt-10 space-y-6">
        <div>
            <h3 class="text-blue-600 font-bold text-lg">| Deskripsi</h3>
            <p class="text-justify text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vestibulum tincidunt ante ac placerat...
            </p>
        </div>

        <div>
            <h3 class="text-blue-600 font-bold text-lg">| Highlight</h3>
            <img src="{{ asset('images/stage-layout.jpg') }}" alt="Layout" class="rounded-lg shadow">
        </div>

        <div>
            <h3 class="text-blue-600 font-bold text-lg">| Lokasi</h3>
            <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>

        <div>
            <h3 class="text-blue-600 font-bold text-lg">| Cara Penukaran</h3>
            <p class="text-justify text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
    </div>
</div>
@endsection
