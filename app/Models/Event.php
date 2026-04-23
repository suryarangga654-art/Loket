<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Masukkan nama kolom yang ada di database nanti
   protected $fillable = ['judul_event', 'lokasi', 'tanggal', 'gambar', 'slug', 'deskripsi'];
    // Di dalam class Event
public function tickets()
{
    return $this->hasMany(Ticket::class);
}
public function transaksis()
{
    return $this->hasMany(Transaksi::class);
}
}