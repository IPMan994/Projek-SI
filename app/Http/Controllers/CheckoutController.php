<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showForm($ticketType, Request $request)
    {
        $jumlah = $request->get('jumlah', 1); // default 1 tiket
        $harga = $ticketType === 'vip' ? 2000000 : 1000000; // sesuaikan harga
        $event = [
            'title' => 'Flow "Anime Shibari 2024 - 2025"',
            'location' => 'Ruang IDE, Tasikmalaya',
            'date' => '02 May 2025',
            'time' => '19:00 - 20:00 WIB',
        ];

        return view('checkout.form', compact('ticketType', 'jumlah', 'harga', 'event'));
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'identity' => 'required',
            'gender' => 'required',
        ]);

        // Simpan data pemesanan di database (bisa disesuaikan)
        // Redirect ke halaman pembayaran / sukses
        return redirect()->route('home.index')->with('success', 'Data berhasil disimpan!');
    }
}
