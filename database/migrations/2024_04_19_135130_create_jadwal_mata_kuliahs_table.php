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
        Schema::create('jadwal_mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->date('hari');
            $table->string('mata_kuliah', 30);
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('ruang', 20);
            $table->string('dosen_pengampu', 50);
            $table->integer('jumlah_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mata_kuliahs');
    }
};
