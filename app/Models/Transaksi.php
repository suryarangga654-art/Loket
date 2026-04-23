<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
        use HasFactory;

    protected $fillable = ['nama_pembeli', 'email_pembeli', 'jumlah_tiket', 'total_harga', 'status'];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
