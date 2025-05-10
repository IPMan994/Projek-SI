@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Tambah Konser Baru</h2>
    <form action="{{ route('concerts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Judul</label>
            <input type="text" name="title" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>
        <div class="mb-4">
            <label class="block">Lokasi</label>
            <input type="text" name="location" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Tanggal</label>
            <input type="datetime-local" name="date" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
