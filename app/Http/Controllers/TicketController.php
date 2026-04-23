<?php
namespace App\Http\Controllers;

use App\Models\Ticket; // Pastikan baris ini ada di paling atas
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Fungsi index yang sudah kamu buat sebelumnya
    public function index()
    {
        $semuaTiket = Ticket::all();
        return view('halaman_tiket', compact('semuaTiket'));
    }

    // TAMBAHKAN FUNGSI INI:
    public function show($id)
    {
        // Mencari tiket berdasarkan ID yang diklik (dari URL /daftar-tiket/1)
        $tiket = Ticket::findOrFail($id);

        // Mengarahkan ke file view detail_tiket.blade.php sambil membawa data tiket
        return view('detail_tiket', compact('tiket'));
    }
}