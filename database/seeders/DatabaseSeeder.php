<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'RT',
            'email' => 'rt@wisma.co.id',
            'email_verified_at' => Date::now() ,
            'password' => Hash::make('admin123'),
            'roles' => 'rt',
        ]);

        
        User::create([
            'name' => 'Kelurahan',
            'email' => 'kelurahan@wisma.co.id',
            'email_verified_at' => Date::now() ,
            'password' => Hash::make('admin123'),
            'roles' => 'kelurahan',
        ]);
    }
}
