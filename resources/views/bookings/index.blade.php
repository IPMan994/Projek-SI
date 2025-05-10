@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Booking</h1>
    @foreach ($bookings as $booking)
        <div class="border p-4 mb-3 rounded bg-white shadow">
            <p>User ID: {{ $booking->user_id }}</p>
            <p>Ticket ID: {{ $booking->ticket_id }}</p>
            <p>Jumlah: {{ $booking->quantity }}</p>
            <p>Total Bayar: Rp{{ number_format($booking->total_price, 0, ',', '.') }}</p>
        </div>
    @endforeach
@endsection
