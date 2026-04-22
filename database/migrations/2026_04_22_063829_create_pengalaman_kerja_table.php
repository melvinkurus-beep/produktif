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
        Schema::create('pengalaman_kerja', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nama'); // Nama perusahaan
        $table->string('jabatan');
        $table->integer('tahun_masuk');
        $table->integer('tahun_keluar');
        $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman_kerja');
    }
};
