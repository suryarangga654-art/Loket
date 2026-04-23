<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika nama tabelmu bukan 'tickets'
    protected $table = 'tickets';

    // Daftarkan kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'event_id',
        'name',
        'price',
        'stock',
    ];

    // Relasi: Setiap tiket milik satu Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}