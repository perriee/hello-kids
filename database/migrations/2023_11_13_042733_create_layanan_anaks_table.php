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
        Schema::create('layanan_anaks', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->integer('lingkar_kepala');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_anaks');
    }
};
