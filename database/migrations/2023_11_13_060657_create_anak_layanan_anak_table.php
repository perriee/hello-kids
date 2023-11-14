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
        Schema::create('anak_layanan_anak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_id')->nullable();
            $table->unsignedBigInteger('layanan_anak_id')->nullable();
            $table->timestamps();

            $table->foreign('anak_id')
                        ->references('id')
                        ->on('anaks')
                        ->onDelete('cascade');

            $table->foreign('layanan_anak_id')
                        ->references('id')
                        ->on('layanan_anaks')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_layanan_anak');
    }
};
