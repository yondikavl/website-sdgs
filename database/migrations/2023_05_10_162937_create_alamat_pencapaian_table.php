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
        Schema::create('alamat_pencapaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pencapaian_id')->nullable();
            $table->foreignId('kelurahan_id')->nullable();
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
        Schema::dropIfExists('alamat_pencapaian');
    }
};
