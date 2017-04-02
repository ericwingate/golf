<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolfRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $i = 1;

        Schema::create('golf_rounds', function (Blueprint $table) use ($i) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        while( $i < 19 ) {
	        $table->integer('hole'.$i);
          $table->boolean('hole'.$i.'_fairway')->nullable();
          $table->integer('hole'.$i.'_putts')->nullable();
          $i++;
        }
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
        Schema::dropIfExists('golf_rounds');
    }
}
