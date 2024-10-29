<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan untuk menggunakan create jika Anda ingin timestamps diisi otomatis
        User::create([
            "name" => "Wafiq",
            "email" => "wafiqnur66@gmail.com",
            "password" => bcrypt("Wafiq123"), // Anda bisa menggunakan bcrypt tanpa backslash
        ]);
    }
}
