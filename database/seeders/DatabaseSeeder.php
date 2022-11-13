<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'dev',
            'password' =>
                '$2a$12$tVKs/e9udXkYGgw2jEkCGu9bNP8QX7zRcRc.6jxSJwfnmS7hPm8le',
            'role' => 'Dev',
        ]);
    }
}
