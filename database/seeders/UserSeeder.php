<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fulanah',
            'email' => 'fulanah@gmail.com',
            'password' => bcrypt('fulanah123'),
            'nik' => Str::random(16),
            'no_hp' => '08123456789',
            'alamat' => 'Jl. Candi Gebang',
            'is_pregnant' => 0,
            'admin_id' => 1,
        ]);
    }
}
