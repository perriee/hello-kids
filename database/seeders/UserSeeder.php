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
            'nik' => '123123123123123',
            'no_hp' => '08123456789',
            'alamat' => 'Jl. Candi Gebang',
            'is_pregnant' => 0,
            'admin_id' => 1,
        ]);

        User::create([
            'name' => 'Zahra',
            'email' => 'zahra@gmail.com',
            'password' => bcrypt('zahra123'),
            'nik' => '456456456456456',
            'no_hp' => '08987654321',
            'alamat' => 'Jl. Seturan Jaya',
            'is_pregnant' => 1,
            'admin_id' => 1,
        ]);
    }
}
