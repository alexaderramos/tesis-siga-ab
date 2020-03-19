<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->char('ScoresId',5);
            $table->tinyInteger('Score');
            $table->char('CodStudent',10);
            $table->char('CodTeacher',10);
            $table->char('CodPeriod',4);
            $table->char('CodCourse',4);

            $table->foreign('CodStudent')->references('CodStudent')->on('students');

            $table->foreign('CodTeacher')->references('CodTeacher')->on('teachers');

            $table->foreign('CodPeriod')->references('CodPeriod')->on('periods');

            $table->foreign('CodCourse')->references('CodCourse')->on('courses');
            $table->primary('ScoresId');

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
        Schema::dropIfExists('scores');
    }
}
