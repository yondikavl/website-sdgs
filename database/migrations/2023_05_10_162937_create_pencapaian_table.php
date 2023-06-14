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
            $table->unsignedBigInteger('indikator_id')->nullable();
            $table->foreign('indikator_id')->references('id')->on('indikator');
            $table->unsignedBigInteger('subindikator_id')->nullable();
            $table->foreign('subindikator_id')->references('id')->on('subindikator');
            $table->text('tahun');
            $table->text('tipe');
            $table->integer('persentase');
            $table->text('sumber');
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
