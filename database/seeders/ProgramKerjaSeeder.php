<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProgramKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programkerjas')->insert([
            'namaproker' => 'Safari Dakwah',
            'bidang' => 'Syiar',
            'tempat' => 'Kelurahan Jatimulyo',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Sholawat Rutin',
            'bidang' => 'Sholawat',
            'tempat' => 'Masjid An-Nur',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Firma Ceria',
            'bidang' => 'Firma',
            'tempat' => 'Fakultas Teknik',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
