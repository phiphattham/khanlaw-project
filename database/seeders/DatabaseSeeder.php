<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\room;
use Illuminate\Database\Seeder;
use Nette\Utils\Strings;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'KhanlawAdmin',
            'email' => 'admin@example.com',
            'password' => '123456789',
            'f_name' => 'Khanlaw',
            'l_name' => 'Viewpoint',
            'role' => 'admin',
            'sex' => 'male',
        ]);

        \App\Models\User::factory()->create([
            'username' => 'KhanlawUser',
            'email' => 'user@example.com',
            'password' => '123456789',
            'f_name' => 'User',
            'l_name' => 'Khanlaw',
            'role' => 'user',
            'sex' => 'female',
        ]);

        room::factory(20)->create();
    }
}
