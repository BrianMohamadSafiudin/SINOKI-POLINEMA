<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TugasProkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Materi Dakwah',
            'sie' => 'Sie Acara',
            'tenggatwaktu' => date('Y-m-d', strtotime('2023-07-25')),
            'idProker' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Surat Undangan OKI',
            'sie' => 'Sie PDD',
            'tenggatwaktu' => date('Y-m-d', strtotime('2023-07-25')),
            'idProker' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Rundown Acara',
            'sie' => 'Sie Acara',
            'tenggatwaktu' => date('Y-m-d', strtotime('2023-07-25')),
            'idProker' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Rundown Acara',
            'sie' => 'Sie Acara',
            'tenggatwaktu' => date('Y-m-d', strtotime('2023-05-20')),
            'idProker' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
