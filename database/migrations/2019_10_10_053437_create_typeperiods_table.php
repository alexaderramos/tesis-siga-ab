<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeperiodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeperiods', function (Blueprint $table) {
            $table->char('TypePeriodCod',5);
            $table->string('TypePeriod');
            $table->integer('MounthNumber');

             $table->primary('TypePeriodCod');
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
        Schema::dropIfExists('typeperiods');
    }
}
