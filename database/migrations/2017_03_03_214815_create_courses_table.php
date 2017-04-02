<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $i = 1;
      Schema::create('courses', function (Blueprint $table) use ($i) {
      $table->increments('id');
      $table->string('course_name', 100);
      $table->integer('par_total');
      $table->string('location');
      $table->integer('yardage_total1');
      $table->integer('yardage_total2');
      $table->integer('yardage_total3');
      $table->integer('yardage_total4');
      $table->integer('yardage_total5');
      while ( $i < 19 ) {
        $table->integer('hole'.$i.'_par');
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
        Schema::dropIfExists('courses');
    }
}
