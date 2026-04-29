<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Halaman Landing Utama
Route::get('/', [EventController::class, 'landing'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

// --- ROUTE JELAJAH (Halaman Filter) ---
// Method index() memanggil file jelajah.create.blade.php
Route::get('/jelajah/create', [EventController::class, 'index'])->name('jelajah.create');

// --- ROUTE BUAT EVENT (Form Input) ---
// Agar link di welcome/navbar tidak error, kita daftarkan semua namanya di sini
Route::get('/eventsshow/create', [EventController::class, 'create'])->name('eventsshow.create');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Route Simpan & Detail
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/eventsshow/{id}', [EventController::class, 'show'])->name('eventsshow.show');

// --- ROUTE PENDUKUNG (Semua lari ke halaman Filter/Index) ---
Route::get('/loketx/create', [EventController::class, 'index'])->name('loketx.create'); // <--- INI YG BARU DITAMBAHKAN
Route::get('/promo/create', [EventController::class, 'promo'])->name('promo.create');
Route::get('/creator/create', [EventController::class, 'index'])->name('creator.create');
Route::get('/biaya/create', [EventController::class, 'index'])->name('biaya.create');
Route::get('/blog/create', [EventController::class, 'blog'])->name('blog.create');
Route::get('/loketscreen/create', [EventController::class, 'loketscreen'])->name('loketscreen.create');
Route::get('/pusat/create', [EventController::class, 'pusat'])->name('pusat.create');
Route::get('/tiket/create', [EventController::class, 'index'])->name('tiket.create');
Route::get('/loketedu/create',[EventController::class, 'loketedu'])->name('loketedu.create');
Route::get('/loketnews/create', [EventController::class, 'loketnews'])->name('loketnews.create');
Route::get('/loketwiki/create', [EventController::class, 'loketwiki'])->name('loketwiki.create');
Route::get('/loketevent/create', [EventController::class, 'loketevent'])->name('loketevent.create');
Route::get('/loketplus/create', [EventController::class, 'loketplus'])->name('loketplus.create');
Route::post('/transaksi/store', function() {
    // Redirect balik ke halaman sebelumnya dengan pesan sukses
    return back()->with('success', 'Pembelian tiket kamu berhasil! Silakan cek email untuk e-voucher.');
})->name('transaksi.store');
// Route Tiket
Route::get('/daftar-tiket', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/daftar-tiket/{id}', [TicketController::class, 'show'])->name('tickets.show');

// Admin
Route::get('/admin/events/create', function () {
    return view('admin.create');
})->name('admin.events.create');

// Profile & Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';