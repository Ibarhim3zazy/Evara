<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the UserSeeder seeds.
     */
    public function run(): void
    {
            User::firstOrCreate([
                'email' => 'user@user.com',
            ],
            [
                'name' => 'user_name',
                'email' => 'user@user.com',
                'password' => '123456789',
            ]);
    }
}
