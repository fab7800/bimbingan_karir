<?php

namespace Database\Seeders;

use App\Models\TicketKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketKategori::insert([
            ['nama' => 'Reguler'],
            ['nama' => 'Premium'],
            ['nama' => 'VIP'],
            ['nama' => 'Early Bird'],
            ['nama' => 'Presale 1'],
            ['nama' => 'Presale 2'],
            ['nama' => 'Presale 3'],
        ]);
    }
}
