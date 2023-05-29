<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Age;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => '123',
            'password' => \bcrypt(123),
        ]);

        \App\Models\Posyandu::create([
            'name' => 'Suwawa',
        ]);

        Age::create([
            'keterangan' => 'Bayi'
        ]);

        Age::create([
            'keterangan' => 'Balita'
        ]);

        Age::create([
            'keterangan' => 'Ibu Hamil'
        ]);

        Age::create([
            'keterangan' => 'Ibu Menyusui'
        ]);
        
        Age::create([
            'keterangan' => 'Umum'
        ]);

    }
}
