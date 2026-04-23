<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    // Kita pastikan events dibuat duluan di sini kalau belum ada
    if (!Schema::hasTable('events')) {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul_event');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->dateTime('waktu_acara');
            $table->string('gambar')->nullable();
            $table->timestamps(); // Tambahkan ini agar tidak error di Seeder
        });
    }

    // Baru buat tabel tickets
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
        $table->string('nama_tiket');
        $table->integer('harga');
        $table->integer('stok');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
