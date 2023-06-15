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
            'updated_at' => now(),
            'namaOki' => 'RISPOL',
            'sie' => 'SIE Acara',
            'image' => 'public/users/DoNnC2wJFdrzEGMsK2BruEMXoScmdqFQAjvt2K5q.jpg'
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
            'updated_at' => now(),
            'namaOki' => 'RISPOL',
            'sie' => 'SIE PDD',
            'image' => 'public/users/xP0HY4AmUu4Gie5SAXerabguaYD6Lq9ThYb0zjBh.jpg'
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
            'updated_at' => now(),
            'namaOki' => 'RISPOL',
            'sie' => 'SIE Dakwah',
            'image' => 'public/users/bR1veiLOpq20a0zZlER5oB6SGCkT7mNA2ryGfkq9.jpg'
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
            'updated_at' => now(),
            'namaOki' => 'RISPOL',
            'sie' => 'SIE Media Informasi',
            'image' => 'public/users/e3anqh1sOEHBnrA67lPBIXQaeSamp8CZJawQLUdk.jpg'
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
            'updated_at' => now(),
            'namaOki' => 'RISPOL',
            'sie' => 'SIE Kesejahteraan Sosial',
            'image' => 'public/users/m1ZX2MOyPW5p7AIahhb2wXXxX6LYKb1UIM5BG1Pq.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'ANISA NURUL AZIZAH',
            'role' => 'user',
            'nim' => '2141720187',
            'prodi' => 'DIV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'email' => 'anisa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('anisaanisa'),
            'created_at' => now(),
            'updated_at' => now(),
            'namaOki' => 'BKM',
        ]);
        DB::table('users')->insert([
            'name' => 'MUHAMAD ELKARIM',
            'role' => 'user',
            'nim' => '2141720111',
            'prodi' => 'DIV Administrasi Bisnis',
            'jurusan' => 'Akutansi',
            'email' => 'muhamad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('muhamadmuhamad'),
            'created_at' => now(),
            'updated_at' => now(),
            'namaOki' => 'BKM',
        ]);
    }
}
