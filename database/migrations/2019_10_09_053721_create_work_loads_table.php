<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_loads', function (Blueprint $table) {
            $table->char('WorkLoadId',4);
            $table->char('CodGrade',4);
            $table->char('CodCourse',4);
            $table->char('CodTeacher',10);
            $table->primary('WorkLoadId');

            $table->foreign('CodGrade')->references('CodGrade')->on('grades');
            $table->foreign('CodCourse')->references('CodCourse')->on('courses');
            $table->foreign('CodTeacher')->references('CodTeacher')->on('teachers');
           
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
        Schema::dropIfExists('work_loads');
    }
}
