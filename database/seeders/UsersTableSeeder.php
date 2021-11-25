<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('users')->insert([
            'name' => 'admin test',
            'email' => 'iamadmin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'test user',
            'email' => 'iamuser@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'test user',
            'email' => 'iamteacher@gmail.com',
            'role' => 'teacher',
            'password' => Hash::make('password'),
        ]);
    }
}
