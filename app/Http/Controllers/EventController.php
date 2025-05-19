<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($slug)
    {
        // Simulasi data event (bisa diambil dari DB nantinya)
        $event = [
            'title' => 'Flow "Anime Shibari 2024 - 2025" - Tasikmalaya',
            'date' => '02 May - 02 May 2025',
            'time' => '19:00 - 20:00 WIB',
            'location' => 'Ruang IDE, Tasikmalaya',
            'organizer' => 'PT. FRIEDRICE ENTERTAINMENT INDONESIA',
            'image' => 'flow-event.jpg',
            'slug' => $slug
        ];

        return view('event.detail', compact('event'));
    }
    
}
