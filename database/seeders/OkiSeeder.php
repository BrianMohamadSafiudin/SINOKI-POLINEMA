<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('okis')->insert([
            'nama' => 'BEM Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'DPM Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HIMANIA (Administrasi Niaga)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMA (Akutansi)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HME (Elektro)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMM (Mesin)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMTK (Teknik Kimia)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMS (Sipil)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMTI (Teknologi Informasi)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'KMK St. John Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'KOMPEN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'OPA Ganendra Giri',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'PASTI Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'Pendidikan dan Penalaran Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'Radio PLFM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'SATMENWA Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' =>'Seni Theatrisic',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama'=>'Talitakum Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama'=>'UKM Olahraga Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama'=>'USMA Polinema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
