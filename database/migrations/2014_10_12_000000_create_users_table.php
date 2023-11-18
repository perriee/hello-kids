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
            $table->string('username', 30)->unique();
            $table->string('password');
            $table->string('nik', 16)->unique();
            $table->string('name', 100);
            $table->string('no_hp', 15)->unique();
            $table->string('alamat', 100);
            $table->enum('is_pregnant', ['yes', 'no'])->default('no');

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
