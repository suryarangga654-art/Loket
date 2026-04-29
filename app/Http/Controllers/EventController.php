<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket; 
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function landing()
    {
        $semuaEvent = Event::orderBy('tanggal', 'asc')->get();
        return view('welcome', compact('semuaEvent'));
    }

    public function index(Request $request)
    {
        $query = Event::query();

        if ($request->filled('lokasi')) $query->where('lokasi', $request->lokasi);
        if ($request->filled('tipe')) $query->where('tipe', $request->tipe);
        if ($request->filled('kategori')) $query->where('kategori', $request->kategori);

        if ($request->filled('waktu')) {
            switch ($request->waktu) {
                case 'hari_ini': $query->whereDate('tanggal', Carbon::today()); break;
                case 'minggu_ini': $query->whereBetween('tanggal', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]); break;
                case 'bulan_ini': $query->whereMonth('tanggal', Carbon::now()->month); break;
            }
        }

        $semuaEvent = $query->orderBy('tanggal', 'asc')->get();
        return view('jelajah.create', compact('semuaEvent'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'kategori'   => 'required',
            'harga'      => 'required|numeric',
            'lokasi'     => 'required',
            'tanggal'    => 'required|date',
            'banner'     => 'required|image',
        ]);

        $path = $request->hasFile('banner') ? $request->file('banner')->store('event-banners', 'public') : null;

        Event::create([
            'judul_event' => $request->nama_event,
            'kategori'    => $request->kategori,
            'harga'       => $request->harga,
            'lokasi'      => $request->lokasi,
            'tanggal'     => $request->tanggal,
            'gambar'      => $path,
        ]);

        return redirect()->route('home')->with('success', 'Event Berhasil!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $tickets = class_exists('\App\Models\Ticket') 
                   ? Ticket::where('event_id', $id)->get() 
                   : collect();

        return view('eventsshow.create', compact('event', 'tickets'));
    }

    // --- TAMBAHKAN FUNCTION INI DI BAWAH ---
    /**
     * Menampilkan halaman Blog
     */
    public function blog()
    {
        // Ini akan memanggil file resources/views/blog/create.blade.php
        return view('blog.create');
    }
    public function loketplus()
    {
        // Ini akan memanggil file resources/views/loketplus/create.blade.php
        return view('loketplus.create');
    }
    public function loketscreen()
    {
        // Ini akan memanggil file resources/views/loketscreen/create.blade.php
        return view('loketscreen.create');
    }
    public function loketedu()
    {
        // Ini akan memanggil file resources/views/loketedu/create.blade.php
        return view('loketedu.create');
    }
    public function loketnews()
    {
        // Ini akan memanggil file resources/views/loketnews/create.blade.php
        return view('loketnews.create');
    }
    public function loketwiki()
    {
        // Ini akan memanggil file resources/views/loketwiki/create.blade.php
        return view('loketwiki.create');
    }
    public function loketevent()
    {
        // Ini akan memanggil file resources/views/loketevent/create.blade.php
        return view('loketevent.create');
    }
    public function promo()
    {
        // Ini akan memanggil file resources/views/promo/create.blade.php
        return view('promo.create');
    }
    public function pusat()
    {
        // Ini akan memanggil file resources/views/pusat/create.blade.php
        return view('pusat.create');
    }
}