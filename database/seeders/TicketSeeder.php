<?php

namespace Database\Seeders;

use App\Models\Tiket;
use App\Models\TicketKategori;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID kategori tiket
        $premium = TicketKategori::where('nama', 'Premium')->first();
        $reguler = TicketKategori::where('nama', 'Reguler')->first();

        $tickets = [
            [
                'event_id' => 1,
                'tickets_kategory_id' => $premium->id,
                'harga' => 1500000,
                'stok' => 100,
            ],
            [
                'event_id' => 1,
                'tickets_kategory_id' => $reguler->id,
                'harga' => 500000,
                'stok' => 500,
            ],
            [
                'event_id' => 2,
                'tickets_kategory_id' => $premium->id,
                'harga' => 200000,
                'stok' => 300,
            ],
            [
                'event_id' => 3,
                'tickets_kategory_id' => $premium->id,
                'harga' => 300000,
                'stok' => 200,
            ],
        ];

        foreach ($tickets as $ticket) {
            Tiket::create($ticket);
        }
    }
}
