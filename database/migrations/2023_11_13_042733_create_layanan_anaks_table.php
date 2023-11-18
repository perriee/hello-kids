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
            $table->unsignedBigInteger('anak_id')->nullable();
            $table->integer('lingkar_kepala')->length(3);
            $table->integer('tinggi_badan')->length(3);
            $table->integer('berat_badan')->length(3);

            $table->timestamps();

            $table->foreign('anak_id')
                        ->references('id')
                        ->on('anaks')
                        ->onDelete('cascade');
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
