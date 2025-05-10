<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('bookings.index');
    }

    public function create() {
        $tickets = Ticket::all();
        return view('bookings.create', compact('tickets'));
    }

    public function store(Request $request) {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }

    public function edit(Booking $booking) {
        $tickets = Ticket::all();
        return view('bookings.edit', compact('booking', 'tickets'));
    }

    public function update(Request $request, Booking $booking) {
        $booking->update($request->all());
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking) {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
