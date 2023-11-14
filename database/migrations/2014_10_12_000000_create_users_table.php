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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('no_hp')->unique();
            $table->string('alamat');
            $table->tinyInteger('is_pregnant')->default(0);

            $table->foreign('admin_id')
                        ->references('id')
                        ->on('admins')
                        ->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
