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
        Schema::create('indikator', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tujuan_id')->nullable();
            $table->string('kode_indikator')->nullable();
            $table->text('nama_indikator');
            $table->text('tipe')->default('%');
            $table->text('rumus')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('tinggi')->default(100);
            $table->integer('sedang')->default(75);
            $table->integer('rendah')->default(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator');
    }
};
