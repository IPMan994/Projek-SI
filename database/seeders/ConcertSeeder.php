<?php

namespace Database\Seeders;

use App\Models\Concert;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::create([
            'title' => 'Konser Musik Nasional',
            'description' => 'Konser besar di Jakarta',
            'location' => 'Jakarta Convention Center',
            'date' => '2025-06-15 20:00:00',
        ]);

        Concert::create([
            'title' => 'Festival Indie',
            'description' => 'Musik Indie dari berbagai daerah',
            'location' => 'Bandung',
            'date' => '2025-07-01 18:30:00',
        ]);
    }
}
