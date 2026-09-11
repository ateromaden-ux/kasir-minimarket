<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'maden',
            'email' => 'ateromaden@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
