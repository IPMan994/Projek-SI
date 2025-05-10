@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Edit Tiket</h2>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block">Konser</label>
            <select name="concert_id" class="w-full border rounded p-2">
                @foreach ($concerts as $concert)
                    <option value="{{ $concert->id }}" {{ $concert->id == $ticket->concert_id ? 'selected' : '' }}>{{ $concert->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block">Tipe Tiket</label>
            <input type="text" name="type" value="{{ $ticket->type }}" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Harga</label>
            <input type="number" name="price" value="{{ $ticket->price }}" class="w-full border rounded p-2" step="0.01">
        </div>
        <div class="mb-4">
            <label class="block">Stok</label>
            <input type="number" name="stock" value="{{ $ticket->stock }}" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
