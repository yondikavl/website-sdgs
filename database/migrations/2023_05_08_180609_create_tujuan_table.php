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
        Schema::create('tujuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pilar_id')->nullable();
            $table->string('ikon_tujuan')->nullable();
            $table->string('nama_tujuan');
            $table->text('deskripsi_tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tujuan');
    }
};
