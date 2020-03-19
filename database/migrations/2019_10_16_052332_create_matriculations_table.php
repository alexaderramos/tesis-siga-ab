<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculations', function (Blueprint $table) {
            $table->char('CodMatriculation',4);
            $table->char('CodStudent',10);
            $table->char('CodGrade',4);
            $table->date('MatriculationDate');
            $table->foreign('CodStudent')->references('CodStudent')->on('students');
            $table->foreign('CodGrade')->references('CodGrade')->on('grades');

            $table->primary('CodMatriculation');

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
        Schema::dropIfExists('matriculations');
    }
}
