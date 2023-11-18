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
        Schema::table('imuns', function (Blueprint $table) {
            $table->foreign('anak_id')
                        ->references('id')
                        ->on('anaks')
                        ->onDelete('cascade');

            $table->foreign('jenis_imun_id')
                        ->references('id')
                        ->on('jenis_imuns')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imuns', function (Blueprint $table) {
            //
        });
    }
};
