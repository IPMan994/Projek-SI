@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Tambah Tiket Baru</h2>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Konser</label>
            <select name="concert_id" class="w-full border rounded p-2">
                @foreach ($concerts as $concert)
                    <option value="{{ $concert->id }}">{{ $concert->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block">Tipe Tiket</label>
            <input type="text" name="type" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Harga</label>
            <input type="number" name="price" class="w-full border rounded p-2" step="0.01">
        </div>
        <div class="mb-4">
            <label class="block">Stok</label>
            <input type="number" name="stock" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
