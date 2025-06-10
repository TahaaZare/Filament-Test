<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => "Admin",
            'full_name' => "Admin Admin",
            'email' => "admin@gmail.com",
            'mobile' => "0911111111111",
            'password' => Hash::make('password'),
        ]);
    }
}
