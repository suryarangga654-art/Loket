<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            if (!Schema::hasColumn('events', 'kategori')) {
                $table->string('kategori')->nullable();
            }
            if (!Schema::hasColumn('events', 'harga')) {
                $table->unsignedBigInteger('harga')->default(0);
            }
            if (!Schema::hasColumn('events', 'lokasi')) {
                $table->string('lokasi')->nullable();
            }
            if (!Schema::hasColumn('events', 'tanggal')) {
                $table->date('tanggal')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumnIfExists('kategori');
            $table->dropColumnIfExists('harga');
            $table->dropColumnIfExists('lokasi');
            $table->dropColumnIfExists('tanggal');
        });
    }
};