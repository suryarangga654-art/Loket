<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
    'judul_event',
    'kategori',
    'harga',
    'lokasi',
    'tanggal',
    'gambar',
];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}