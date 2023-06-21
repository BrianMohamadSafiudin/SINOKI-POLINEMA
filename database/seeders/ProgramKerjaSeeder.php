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
            'tempat' => 'Jatimulyo',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'namaOki' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Sholawat Rutin',
            'bidang' => 'Sholawat',
            'tempat' => 'Masjid An-Nur',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'namaOki' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Firma Ceria',
            'bidang' => 'Firma',
            'tempat' => 'Fakultas Teknik',
            'tanggalproker' => date('Y-m-d', strtotime('2023-05-25')),
            'namaOki' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Donor Darah',
            'bidang' => 'Departemen Kesehatan',
            'tempat' => 'Aula Pertamina Polinema',
            'tanggalproker' => date('Y-m-d', strtotime('2023-06-28')),
            'namaOki' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Pengajian Akbar',
            'bidang' => 'Syiar',
            'tempat' => 'Masjid An-Nur Polinema',
            'tanggalproker' => date('Y-m-d', strtotime('2023-07-15')),
            'namaOki' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Pengabdian Masyarakat',
            'bidang' => 'Departemen Humas',
            'tempat' => 'Desa Sumberrejo',
            'tanggalproker' => date('Y-m-d', strtotime('2023-09-10')),
            'namaOki' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Kesehatan Masyarakat',
            'bidang' => 'Departemen Kesehatan',
            'tempat' => 'Desa Sumberrejo',
            'tanggalproker' => date('Y-m-d', strtotime('2023-09-10')),
            'namaOki' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Pertolongan Pertama I',
            'bidang' => 'Departemen Kesehatan',
            'tempat' => 'Gedung Teknik Mesin Lantai 4',
            'tanggalproker' => date('Y-m-d', strtotime('2023-08-22')),
            'namaOki' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('programkerjas')->insert([
            'namaproker' => 'Pertolongan Pertama II',
            'bidang' => 'Departemen Kesehatan',
            'tempat' => 'Gedung Teknik Mesin Lantai 4',
            'tanggalproker' => date('Y-m-d', strtotime('2023-10-29')),
            'namaOki' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
