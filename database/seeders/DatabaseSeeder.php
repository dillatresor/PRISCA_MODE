<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'DILLA TRESOR',
            'email' => 'dillatresor3@gmail.com',
            'password' => Hash::make('Destro13'),
        ]);

        DB::table('users')->insert([
            'name' => 'KENNEDY',
            'email' => 'kennedy@gmail.com',
            'password' => Hash::make('kennedy2023'),
        ]);

        DB::table('users')->insert([
            'name' => 'BELYSE',
            'email' => 'belyse@gmail.com',
            'password' => Hash::make('belyse2023'),
        ]);
   }
}
