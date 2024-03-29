<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
       Schema::create('clients', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('salon_id')->unsigned();
           $table->foreign('salon_id')->references('id')->on('salons');
           $table->string('first');
           $table->string('last');
           $table->string('dob');
           $table->string('phone');
           $table->string('email');
           $table->string('address');
           $table->timestamps();
       });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('clients');
     }
}
