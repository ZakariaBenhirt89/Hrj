<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Second extends Seeder
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
            'name' => 'Aicha Amine',
            'email' => 'iamadminbn@hrj.com',
            'role' => 'admin',
            'is_res' => false ,
            'is_active' => true,
            'password' => Hash::make('password'),
            'center' =>'BN',
        ]);
    }
}
