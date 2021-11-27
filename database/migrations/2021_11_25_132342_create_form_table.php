<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->string('identifiant') ;
            $table->unsignedBigInteger('editor');
            $table->boolean('locked')->nullable('true');
            $table->unsignedBigInteger('locked_by')->nullable('true');
            $table->string('center_form');

        });
        Schema::table('form', function($table) {
            $table->foreign('editor')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('locked_by')->references('id')->on('users')->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form');
    }
}
