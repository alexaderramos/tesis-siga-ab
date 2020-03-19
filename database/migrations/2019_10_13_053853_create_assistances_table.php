<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function (Blueprint $table) {
            $table->char('AssistancesId',5);
            $table->char('CodGrade',4); 
            $table->char('CodPeriod',5);
            $table->char('CodStudent',10);
            $table->primary('AssistancesId');
            $table->foreign('CodGrade')->references('CodGrade')->on('grades');
            $table->foreign('CodPeriod')->references('CodPeriod')->on('periods');
            $table->foreign('CodStudent')->references('CodStudent')->on('students');
         
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
        Schema::dropIfExists('assistances');
    }
}
