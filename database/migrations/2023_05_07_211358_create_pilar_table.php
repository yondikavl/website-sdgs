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
        Schema::create('pilar', function (Blueprint $table) {
            $table->id();
            $table->string('ikon_pilar')->nullable();
            $table->string('nama_pilar');
            $table->text('deskripsi_pilar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilar');
    }
};
