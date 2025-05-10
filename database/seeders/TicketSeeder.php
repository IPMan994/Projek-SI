<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'concert_id' => 1,
            'type' => 'VIP',
            'price' => 1500000,
            'stock' => 100,
        ]);

        Ticket::create([
            'concert_id' => 1,
            'type' => 'Regular',
            'price' => 750000,
            'stock' => 300,
        ]);

        Ticket::create([
            'concert_id' => 2,
            'type' => 'VIP',
            'price' => 1300000,
            'stock' => 50,
        ]);
    }
}
