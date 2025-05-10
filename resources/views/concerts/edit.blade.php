@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Edit Konser</h2>
    <form action="{{ route('concerts.update', $concert->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block">Judul</label>
            <input type="text" name="title" value="{{ $concert->title }}" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2">{{ $concert->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block">Lokasi</label>
            <input type="text" name="location" value="{{ $concert->location }}" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block">Tanggal</label>
            <input type="datetime-local" name="date" value="{{ $concert->date }}" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
