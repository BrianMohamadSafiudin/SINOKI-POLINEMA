<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'BRIAN MOHAMAD SAFIUDIN',
            'role' => 'user',
            'nim' => '2141720133',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'brian@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('brianbrian'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'MUHAMMAD BINTANG SHOLU FIRMANSYAH',
            'role' => 'user',
            'nim' => '2141720101',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'sholu@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('sholusholu'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'TRI JAGAD ARIYANI',
            'role' => 'user',
            'nim' => '2141720049',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'yani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('yaniyani'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'FEBRYAN RIZKI HIDAYATULLAH',
            'role' => 'user',
            'nim' => '2141720059',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'febryan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('febryanfebryan'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'FADLILA AFIDA',
            'role' => 'user',
            'nim' => '2141720130',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'fadlila@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('fadlilafadlila'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
