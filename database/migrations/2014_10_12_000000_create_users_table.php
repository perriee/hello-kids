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
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('nik', 16)->unique();
            $table->string('name', 100);
            $table->string('no_hp', 15)->unique();
            $table->string('alamat', 100);
            $table->tinyInteger('is_pregnant')->default(0);

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
