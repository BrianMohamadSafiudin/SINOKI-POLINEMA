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
            'nama' => 'RISPOL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'HMTI',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'Pendidikan Penalaran',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('okis')->insert([
            'nama' => 'BKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
