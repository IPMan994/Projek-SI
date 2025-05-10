@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Tiket</h1>
    @foreach ($tickets as $ticket)
        <div class="border p-4 mb-3 rounded bg-white shadow">
            <p>Concert ID: {{ $ticket->concert_id }}</p>
            <p>Harga: Rp{{ number_format($ticket->price, 0, ',', '.') }}</p>
            <p>Stok: {{ $ticket->stock }}</p>
        </div>
    @endforeach
@endsection
