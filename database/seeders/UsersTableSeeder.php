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
            'name' => 'Admin Brian',
            'email' => 'brian@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('brian'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Sholu',
            'email' => 'sholu@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('sholu'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Yani',
            'email' => 'yani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('yani'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Febryan',
            'email' => 'febryan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('febryan'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Fadlila',
            'email' => 'fadlila@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('fadlila'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
