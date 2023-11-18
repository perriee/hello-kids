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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('usia_kandungan')->length(10);
            $table->integer('berat_badan')->length(3);
            $table->integer('tensi')->length(4);
            $table->integer('lingkar_lengan')->length(3);
            $table->text('keluhan');

            $table->timestamps();

            $table->foreign('user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
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
