<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createalltables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('users',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('password');
        });
        Schema::create('units',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('id_owner');

        });
        Schema::create('unitspeoples',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->string('name');
            $table->date('birthdate');

        });
        Schema::create('unitsvehicles',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->string('title');
            $table->string('color');//cor
            $table->date('plate');//placa

        });
        Schema::create('unitpets',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->string('name');
            $table->string('race');//raça


        });
        Schema::create('walls',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->datetime('datacreated');


        });
        Schema::create('walllikes',function(Blueprint $table){
            $table->id();
            $table->integer('id_walls');
            $table->integer('id_user');



        });
        Schema::create('docs',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('fileurl');


        });
        Schema::create('billets',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->string('title');
            $table->string('fileurl');


        });
        Schema::create('warnings',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->string('title');
            $table->string('status')->default('IN_REVIEW');//status //ERESOLVED
            $table->string('datecreated');
            $table->text('photos'); //foto.jpg

        });
        Schema::create('foundanlost',function(Blueprint $table){
            $table->id();
            $table->integer('status')->default('lost'); //lost e recovered
            $table->string('photo');
            $table->string('description');
            $table->string('where');
            $table->date('datecreated');

        });
        Schema::create('areas',function(Blueprint $table){
            $table->id();
            $table->integer('alowed')->default('1');
            $table->string('title');
            $table->string('cover');
            $table->string('days'); //1,2,3,4,5,6,7
            $table->time('start_time');
            $table->time('end_time');


        });

        Schema::create('areadisableddays',function(Blueprint $table){
            $table->id();
            $table->integer('id_area');
            $table->date('day');



        });

        Schema::create('reservations',function(Blueprint $table){
            $table->id();
            $table->integer('id_unit');
            $table->integer('id_area');
            $table->date('day');
            $table->datetime('reservation_date');



        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('users');
        Schema::dropIfExists('units');
        Schema::dropIfExists('unitspeoples');
        Schema::dropIfExists('unitsvehicles');
        Schema::dropIfExists('unitpets');
        Schema::dropIfExists('walls');
        Schema::dropIfExists('walllikes');
        Schema::dropIfExists('docs');
        Schema::dropIfExists('billets');
        Schema::dropIfExists('warnings');
        Schema::dropIfExists('areadisableddays');
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('foundanlost');
        Schema::dropIfExists('areas');


     }
}
