<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function select()
    {
        return view('tickets.select');
    }

    // Proses checkout (sementara redirect ke halaman konfirmasi)
    public function checkout(Request $request)
    {
        $vip = $request->input('vip_quantity');
        $festival = $request->input('festival_quantity');

        // Lakukan validasi, simpan data pesanan, dll

        return redirect()->route('tickets.confirmation')->with([
            'vip' => $vip,
            'festival' => $festival,
        ]);
    }

    // Konfirmasi setelah pemesanan
    public function confirmation()
    {
        return view('tickets.confirmation');
    }
}
