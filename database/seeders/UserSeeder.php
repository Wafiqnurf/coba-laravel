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
        $user = [
            "name" => "Wafiq",
            "email" => "wafiqnur66@gmail.com",
            "password" => \bcrypt("Wafiq123"),
        ];

        User::insert($user);
    }
}
