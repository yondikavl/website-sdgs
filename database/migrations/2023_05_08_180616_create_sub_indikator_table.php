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
        Schema::create('subindikator', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('indikator_id')->nullable();
            $table->foreign('indikator_id')->references('id')->on('indikator');
            $table->string('ikon_sub')->nullable();
            $table->string('nama_sub');
            $table->text('deskripsi_sub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_indikator');
    }
};
