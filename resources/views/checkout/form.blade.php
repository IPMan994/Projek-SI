@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-lg font-bold mb-4">🧾 Data Diri</h2>
            <p class="font-bold text-blue-700 bg-blue-100 inline-block px-2 py-1 mb-4">👤 Pengunjung: {{ $jumlah }} {{ strtoupper($ticketType) }}</p>

            <form method="POST" action="{{ route('checkout.submit') }}">
                @csrf

                <input type="hidden" name="ticket_type" value="{{ $ticketType }}">
                <input type="hidden" name="jumlah" value="{{ $jumlah }}">

                <label>Nama Depan *</label>
                <input type="text" name="first_name" class="input mb-2 w-full" required>

                <label>Nama Belakang</label>
                <input type="text" name="last_name" class="input mb-2 w-full">

                <label>Email *</label>
                <input type="email" name="email" class="input mb-2 w-full" required>

                <label>No. Handphone *</label>
                <input type="text" name="phone" class="input mb-2 w-full" required>

                <label>Nomor Identitas (KTP/Passport) *</label>
                <input type="text" name="identity" class="input mb-2 w-full" required>

                <label>Jenis Kelamin *</label><br>
                <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>

                <div class="mt-4">
                    <label><input type="checkbox" required> Saya menyetujui <a href="#" class="text-blue-600 underline">Syarat & Ketentuan</a> dan <a href="#" class="text-blue-600 underline">Kebijakan Privasi</a></label>
                </div>

                <div class="mt-2">
                    <label><input type="checkbox" required> Saya menyetujui <a href="#" class="text-blue-600 underline">Syarat Pemrosesan Data Pribadi</a></label>
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('tickets.select') }}" class="bg-gray-300 px-4 py-2 rounded">Kembali</a>
                    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded">Lanjut</button>
                </div>
            </form>
        </div>

        <div>
            <div class="bg-white p-4 rounded-lg shadow mb-4">
                <h2 class="font-semibold">{{ $event['title'] }}</h2>
                <p>📅 {{ $event['date'] }}</p>
                <p>🕖 {{ $event['time'] }}</p>
                <p>📍 {{ $event['location'] }}</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="font-semibold">VIP Section</p>
                <p>{{ $jumlah }} tiket x Rp {{ number_format($harga, 0, ',', '.') }}</p>
                <hr class="my-2">
                <p class="font-bold text-right">Rp {{ number_format($jumlah * $harga, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
