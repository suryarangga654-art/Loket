<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    public function run(): void 
{
    // 1. Sesuaikan Key dengan nama kolom di Migrasi kamu!
    $event = \App\Models\Event::firstOrCreate(
        ['judul_event' => 'Konser Musik Pop'], // Cari judul ini
        [
            'deskripsi'    => 'Deskripsi konser musik pop yang seru.',
            'lokasi'       => 'Jakarta',
            'waktu_acara'  => now(),
            'gambar'       => null,
        ]
    );

    // 2. Buat tiketnya
    \App\Models\Ticket::create([
        'event_id'   => $event->id,
        'nama_tiket' => 'Festival Reguler',
        'harga'      => 150000,
        'stok'       => 50
    ]);
}
}