<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;

class ConcertController extends Controller
{
    public function index()
    {
        return view('concerts.index');
    }

    public function create()
    {
        return view('concerts.create');
    }

    public function store(Request $request)
    {
        Concert::create($request->all());
        return redirect()->route('concerts.index');
    }

    public function edit(Concert $concert)
    {
        return view('concerts.edit', compact('concert'));
    }

    public function update(Request $request, Concert $concert)
    {
        $concert->update($request->all());
        return redirect()->route('concerts.index');
    }

    public function destroy(Concert $concert)
    {
        $concert->delete();
        return redirect()->route('concerts.index');
    }
}
