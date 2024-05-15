<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'username' => 'Admin',
            'email' => 'munachaps@gmail.com',
            'password' => 'password',
            'email_verified_at' => now(),
            'approved_at' => now(),
            'updated_at'  => now(),
            'created_at' => now()
         ]);
    }
}
