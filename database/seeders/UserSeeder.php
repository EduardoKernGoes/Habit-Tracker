<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Eduardo Goes',
            'email' => 'edugoes215@gmail.com',
            'password' => '123456'
        ]);
    }
}
