<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/events/create', function () {
    return view('events.create');
})->name('events.create')->middleware('auth');

require __DIR__.'/auth.php';

Route::post('/events', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('events.store')->middleware('auth');

Route::get('/jelajah/create', function () {
    return view('jelajah.create');
})->name('jelajah.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/jelajah', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('jelajah.store')->middleware('auth');

Route::get('/tiket/create', function () {
    return view('tiket.create');
})->name('tiket.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/tiket', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('tiket.store')->middleware('auth');

Route::get('/informasi/create', function () {
    return view('informasi.create');
})->name('informasi.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/informasi', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('informasi.store')->middleware('auth');

Route::get('/pengaturan/create', function () {
    return view('pengaturan.create');
})->name('pengaturan.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/pengaturan', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('pengaturan.store')->middleware('auth');

Route::get('/creator/create', function () {
    return view('creator.create');
})->name('creator.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/creator', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('creator.store')->middleware('auth');

Route::get('/biaya/create', function () {
    return view('biaya.create');
})->name('biaya.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/biaya', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('biaya.store')->middleware('auth');

Route::get('/blog/create', function () {
    return view('blog.create');
})->name('blog.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/blog', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('blog.store')->middleware('auth');

Route::get('/loketx/create', function () {
    return view('loketx.create');
})->name('loketx.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketx', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketx.store')->middleware('auth');

Route::get('/loketedu/create', function () {
    return view('loketedu.create');
})->name('loketedu.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketedu', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketedu.store')->middleware('auth');

Route::get('/loketnews/create', function () {
    return view('loketnews.create');
})->name('loketnews.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketnewws', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketnews.store')->middleware('auth');

Route::get('/loketscreen/create', function () {
    return view('loketscreen.create');
})->name('loketscreen.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketscreen', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketscreen.store')->middleware('auth');

Route::get('/loketwiki/create', function () {
    return view('loketwiki.create');
})->name('loketwiki.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketwiki', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketwiki.store')->middleware('auth');

Route::get('/loketevent/create', function () {
    return view('loketevent.create');
})->name('loketevent.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketevent', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketevent.store')->middleware('auth');

Route::get('/pusat/create', function () {
    return view('pusat.create');
})->name('pusat.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/pusat', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('pusat.store')->middleware('auth');

Route::get('/promo/create', function () {
    return view('promo.create');
})->name('promo.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/promo', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('promo.store')->middleware('auth');

Route::get('/loketplus/create', function () {
    return view('loketplus.create');
})->name('loketplus.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/loketplus', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('loketplus.store')->middleware('auth');

Route::get('/eventsshow/create', function () {
    return view('eventsshow.create');
})->name('eventsshow.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/eventsshow', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('eventsshow.store')->middleware('auth');

Route::get('/event-saya/create', function () {
    return view('event-saya.create');
})->name('event-saya.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/event-saya', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('event-saya.store')->middleware('auth');

Route::get('/informasi-legal/create', function () {
    return view('informasi-legal.create');
})->name('informasi-legal.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/informasi-legal', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('informasi-legal.store')->middleware('auth');

Route::get('/kelola-akses/create', function () {
    return view('kelola-akses.create');
})->name('kelola-akses.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/kelola-akses', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('kelola-akses.store')->middleware('auth');

Route::get('/rekening/create', function () {
    return view('rekening.create');
})->name('rekening.create')->middleware('auth');
require __DIR__.'/auth.php';

Route::post('/rekening', function (Request $request) {
    // simpan data event nanti di sini
    dd($request->all()); // sementara untuk test
})->name('rekening.store')->middleware('auth');
