@extends('layouts.app')

@section('content')
<div class="p-6">
    <!-- Filter -->
    <div class="bg-white shadow rounded-xl p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Cari Event</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <select class="w-full p-3 border rounded-lg">
                <option>Konser Jazz</option>
                <option>Konser Pop</option>
                <option>Konser Rock</option>
            </select>
            <select class="w-full p-3 border rounded-lg">
                <option>Indonesia</option>
                <option>Malaysia</option>
                <option>Singapura</option>
            </select>
            <input type="date" class="w-full p-3 border rounded-lg" />
        </div>
    </div>

    <!-- Event List -->
    <div>
        <h2 class="text-xl font-semibold mb-4">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-white shadow rounded-xl p-4">
                    <div class="text-gray-500 text-sm mb-1">14 Mei 2025</div>
                    <h3 class="font-bold text-lg mb-2">Konser Didi Kempot Orchestra</h3>
                    <p class="text-sm text-gray-600 mb-3">Stadion GBK, Jakarta</p>
                    <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">Lihat Detail</a>
                </div>
            @endfor
        </div>
    </div>

    <!-- CTA -->
    <div class="mt-12 bg-purple-100 rounded-xl p-6 flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            <h2 class="text-lg font-semibold">Buat Event Kamu Sendiri!</h2>
            <p class="text-sm text-gray-600">Langkah cepat & mudah untuk memulai event-mu</p>
        </div>
        <a href="#" class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">Buat Event</a>
    </div>
</div>
@endsection
