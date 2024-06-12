<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('code', 7)->nullable(); // Make the code field nullable
            $table->string('name', 255);
            $table->string('deskripsi', 255);
            $table->text('meta')->nullable();
            $table->timestamps();

            $table->foreignId('city_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kecamatan');
    }
};
