<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

// --- ROUTE DINAMIS (Taruh di atas) ---
Route::get('/daftar-tiket', [TicketController::class, 'index']);
Route::get('/daftar-tiket/{id}', [TicketController::class, 'show']);
Route::get('/eventsshow', [EventController::class, 'index'])->name('eventsshow.index');
Route::get('/eventsshow/create', [EventController::class, 'create'])->name('eventsshow.create');
Route::post('/transaksi/store', [App\Http\Controllers\EventController::class, 'store'])->name('transaksi.store');
// Halaman Form Admin
Route::get('/admin/events/create', function () {
    return view('admin.create');
})->name('admin.events.create');

// Proses Simpan dari Admin
Route::post('/events/store', [EventController::class, 'storeEvent'])->name('events.store');
// --- PENTING: Route /create HARUS sebelum /{id} ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // List semua halaman Create kamu
    $features = [
        'events', 'jelajah', 'tiket', 'informasi', 'pengaturan', 'creator', 
        'biaya', 'blog', 'loketx', 'loketedu', 'loketnews', 'loketscreen', 
        'loketwiki', 'loketevent', 'pusat', 'promo', 'loketplus',
        'event-saya', 'informasi-legal', 'kelola-akses', 'rekening', 'dashboardcreator'
    ];

    foreach ($features as $f) {
        Route::get("/$f/create", function () use ($f) {
            return view("$f.create");
        })->name("$f.create");

        Route::post("/$f", function (Request $request) {
            dd($request->all());
        })->name("$f.store");
    }
});

// --- BARU TARUH DETAIL DINAMIS DI PALING BAWAH ---
Route::get('/eventsshow/{id}', [EventController::class, 'show'])->name('eventsshow.show');

require __DIR__.'/auth.php';