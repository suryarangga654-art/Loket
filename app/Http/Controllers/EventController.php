<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Tambahkan ini di paling atas biar gak error pas bikin slug

class EventController extends Controller
{
    public function index()
    {
        $semuaEvent = Event::all();
        return view('eventsshow.index', compact('semuaEvent'));
    }

    public function create()
    {
        $event = \App\Models\Event::first();
        if (!$event) {
            return "Data Event tidak ditemukan di database. Jalankan Seeder dulu!";
        }
        $tickets = \App\Models\Ticket::where('event_id', $event->id)->get();
        return view('eventsshow.create', compact('event', 'tickets'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $tickets = Ticket::where('event_id', $id)->get();
        return view('eventsshow.create', compact('event', 'tickets'));
    }

    public function store(Request $request)
    {
        Transaksi::create([
            'nama_pembeli' => $request->nama_lengkap,
            'email_pembeli' => $request->email,
            'jumlah_tiket' => $request->qty,
            'total_harga' => $request->total,
        ]);

        return redirect()->back()->with('success', 'Pesanan kamu berhasil disimpan!');
    }

    // --- TEMPELKAN DI SINI (SEBELUM KURUNG TUTUP TERAKHIR) ---
   public function storeEvent(Request $request)
{
    // 1. Cek apakah ada file
    if (!$request->hasFile('gambar')) {
        return redirect()->back()->with('error', 'Gagal, gambar tidak terdeteksi!');
    }

    // 2. Olah file gambar
    $file = $request->file('gambar');
    $nama_file = time() . "_" . $file->getClientOriginalName();
    $tujuan_upload = 'posters';
    
    // Simpan ke storage/app/public/posters
    $file->storeAs($tujuan_upload, $nama_file, 'public');

    // 3. Simpan ke Database
    // Pastikan kolom-kolom ini sudah diset NULL di phpMyAdmin (kecuali judul, gambar, slug)
    \App\Models\Event::create([
        'judul_event' => $request->judul_event,
        'gambar'      => $tujuan_upload . '/' . $nama_file,
        'slug'        => \Illuminate\Support\Str::slug($request->judul_event),
        'lokasi'      => 'Stadion Utama', // Sementara hardcode
        'tanggal'     => now(),           // Sementara tanggal hari ini
    ]);

    return redirect()->back()->with('success', 'Event Baru dan Gambar Berhasil Disimpan!');
}
}