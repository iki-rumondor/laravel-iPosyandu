<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{

    public function run(): void
    {
        $desa = [
            [
                'nama' => 'Bulila',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Dulamayo Barat',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Dulamayo Selatan',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Dulohupa',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Hulawa',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Luhu',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Mongolato',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Pilohayanga',
                'kode_pos' => '96181',
            ],
            [
                'nama' => 'Pilohayanga Barat',
                'kode_pos' => '96181',
            ],
        ];

        foreach ($desa as $value) {
            Desa::create([
                'nama' => $value['nama'],
                'kode_pos' => $value['kode_pos']
            ]);
        }
    }
}
