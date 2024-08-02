<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsReadToPencapaianTable extends Migration
{
    public function up(): void
    {
        Schema::table('pencapaian', function (Blueprint $table) {
            $table->boolean('is_read')->default(false)->after('keterangan');
        });
    }

    public function down(): void
    {
        Schema::table('pencapaian', function (Blueprint $table) {
            $table->dropColumn('is_read');
        });
    }
}

