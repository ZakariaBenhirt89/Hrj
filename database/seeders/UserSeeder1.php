<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin test',
            'email' => 'iamadminsidima3roof@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'center' =>'SM',
        ]);
        DB::table('users')->insert([
            'name' => 'test user',
            'email' => 'iamadminmkanssa@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'center' =>'MK',
        ]);
        DB::table('users')->insert([
            'name' => 'test user',
            'email' => 'iamadminpjn@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'center' =>'PJN',
        ]);
    }
}
