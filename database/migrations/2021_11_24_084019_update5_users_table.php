<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update5UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
             $user1 = \App\Models\User::where('role' , 'teacher')->first();
             $user1->role = 'admin' ;
             $user1->center = 'BN' ;
             $user1->save();
             $user2 = \App\Models\User::where('role' , 'user')->first();
             $user2->role = 'admin' ;
             $user2->center = 'BN' ;
             $user2->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
