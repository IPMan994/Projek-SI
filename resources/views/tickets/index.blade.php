@extends('layouts.app')

@section('content')
<a href="{{ route('home.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"><-< /a>
        <div class="container mx-auto p-6">
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Gambar Event -->
                <div class="md:col-span-full">
                    <img src="" alt="Event Banner" class="rounded-lg shadow-md">
                </div>
                <div class="mt-10 grid md:grid-span-3 gap-6">
                    <!-- VIP Ticket Card -->
                    <div class="bg-white p-6 rounded shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">VIP</h3>
                        <ul class="text-sm text-gray-700 list-disc pl-5 mt-2">
                            <li>Standing</li>
                            <li>Priority Entry</li>
                            <li>Hi5 Session</li>
                            <li>Group Photo</li>
                        </ul>
                        <p class="text-gray-600 mt-4 text-sm">Rp. 2.000.000</p>

                        <form action="{{ route('checkout.form', 'vip') }}" method="GET">
                            <label for="jumlah">Pilih Jumlah Tiket:</label>
                            <select name="jumlah" class="mt-2 w-full border rounded p-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            <div class="flex justify-between items-center mt-4">
                                <p class="text-gray-500 text-xs">Tersisa 100 tiket</p>
                                <button type="submit" class="mt-4 bg-purple-600 text-white px-4 py-2 rounded">
                                    Beli Tiket Festival A
                                </button>
                            </div>
                    </div>

                    <!-- Festival A Ticket Card -->
                    <div class="bg-white p-6 rounded shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Festival A</h3>
                        <ul class="text-sm text-gray-700 list-disc pl-5 mt-2">
                            <li>Standing</li>
                            <li>No zone assignment</li>
                        </ul>
                        <p class="text-gray-600 mt-4 text-sm">Rp. 1.000.000</p>

                        <form action="{{ route('checkout.form', 'vip') }}" method="GET">
                            <label for="jumlah">Pilih Jumlah Tiket:</label>
                            <select name="jumlah" class="mt-2 w-full border rounded p-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                            <div class="flex justify-between items-center mt-4">
                                <p class="text-gray-500 text-xs">Tersisa 100 tiket</p>
                                <button type="submit" class="mt-4 bg-purple-600 text-white px-4 py-2 rounded">
                                    Beli Tiket Festival A
                                </button>
                            </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="bg-white p-6 rounded shadow-md flex flex-col justify-between">
                        <div>
                            <p class="text-gray-800 text-sm mb-2">🎫 Tiket yang dipilih akan dicantumkan di sini</p>
                            <p class="text-gray-500 text-xs">Jumlah (max 5 tiket per jenis)</p>
                        </div>
                        <button type="submit" class="mt-4 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
                </form>
                @endsection