<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::create([
        //     'name'      =>'Admin Al Arifin',
        //     'email'     =>'al.arifin@fic10.com',
        //     'password'  => Hash::make('12345678'),
        //     'roles'     =>'ADMIN',
        //     'phone'     =>'08123456789',
        // ]);

        $this->call([
            UserSeeder::class,
            SoalSeeder::class,
            UjianSeeder::class,
            UjianSoalListSeeder::class,
        ]);
    }
}
