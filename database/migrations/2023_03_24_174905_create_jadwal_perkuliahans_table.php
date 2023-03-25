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
        Schema::create('jadwal_perkuliahans', function (Blueprint $table) {
            $table->id();
            $table->String('hari', 100);
            $table->String('jam', 100);
            $table->String('kodeMK', 100);
            $table->String('mataKuliah', 100);
            $table->String('dosen', 100);
            $table->String('ruang', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_perkuliahans');
    }
};
