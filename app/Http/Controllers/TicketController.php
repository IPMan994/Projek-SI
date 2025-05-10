<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Concert;

class TicketController extends Controller
{
    public function index() 
    {
        return view('tickets.index');
    }

    public function create() {
        $concerts = Concert::all();
        return view('tickets.create', compact('concerts'));
    }

    public function store(Request $request) {
        Ticket::create($request->all());
        return redirect()->route('tickets.index');
    }

    public function edit(Ticket $ticket) {
        $concerts = Concert::all();
        return view('tickets.edit', compact('ticket', 'concerts'));
    }

    public function update(Request $request, Ticket $ticket) {
        $ticket->update($request->all());
        return redirect()->route('tickets.index');
    }

    public function destroy(Ticket $ticket) {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }
}
