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
        Schema::create('pencapaian', function (Blueprint $table) {
            $table->id();
            $table->string('indikator_id')->nullable();
            $table->text('nama_kegiatan')->nullable();
            $table->text('tahun');
            $table->decimal('persentase', 8, 2);
            $table->text('sumber_data')->nullable();
            $table->text('tingkatan')->nullable();
            $table->text('anggaran')->nullable();
            $table->text('sumber_pendanaan')->nullable();
            $table->text('lokasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencapaian');
    }
};
