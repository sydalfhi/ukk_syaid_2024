<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => "admin",
            'namaLengkap' => "admin",
            'email' => "admin@gmail.com",
            'password' => "12312312",
            'role' => "admin"
        ]);
        User::create([
            'username' => "syalfrhiii",
            'namaLengkap' => "syaid alfarishi",
            'email' => "syaidalfarishi@gmail.com",
            'password' => "syaid123",
            'role' => "user"
        ]);
    }
}
