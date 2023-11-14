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
        Schema::create('layanan_bumils', function (Blueprint $table) {
            $table->id();
            $table->integer('usia_kandungan');
            $table->dateTime('tanggal');
            $table->integer('berat_badan');
            $table->integer('tensi');
            $table->integer('lingkar_lengan');
            $table->text('keluhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_bumils');
    }
};
