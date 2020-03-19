<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearperiodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearperiods', function (Blueprint $table) {
            $table->char('YearPeriodId',6);
            $table->char('YearId',6);
            $table->char('TypePeriodCod',5);

            $table->foreign('YearId')->references('YearId')->on('Years');

            $table->foreign('TypePeriodCod')->references('TypePeriodCod')->on('typeperiods');
            $table->primary('YearPeriodId');
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
        Schema::dropIfExists('yearperiods');
    }
}
