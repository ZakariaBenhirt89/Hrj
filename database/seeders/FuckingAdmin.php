<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FuckingAdmin extends Seeder
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
            'name' => 'Amal Farid',
            'email' => 'iamadminsidima3roof@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
             'is_active' => true,
            'password' => Hash::make('password'),
            'center' =>'SM',
        ]);
        DB::table('users')->insert([
            'name' => 'Hamid Test',
            'email' => 'iamadminmkanssa@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
            'is_active' => true,
            'password' => Hash::make('password'),
            'center' =>'MK',
        ]);
        DB::table('users')->insert([
            'name' => 'Farida Youssri',
            'email' => 'iamadminpjn@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
            'is_active' => true,
            'password' => Hash::make('password'),
            'center' =>'PJN',
        ]);
        DB::table('users')->insert([
            'name' => 'Ahmed Amine',
            'email' => 'iamadminbou@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
            'is_active' => true,
            'password' => Hash::make('password'),
            'center' =>'BO',
        ]);
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'superadmin@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
            'is_active' => true,
            'is_super' => true ,
            'password' => Hash::make('password'),
            'center' =>'Hrj',
        ]);
    }
}
