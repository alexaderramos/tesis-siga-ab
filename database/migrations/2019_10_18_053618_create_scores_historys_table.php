<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores_historys', function (Blueprint $table) {
             $table->char('ScoresHistorysid',5);
            $table->char('ScoresId',5);
            $table->tinyInteger('Scores');
            $table->date('ScoresDate');
            $table->foreign('ScoresId')->references('ScoresId')->on('scores');
            $table->primary('ScoresHistorysid');
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
        Schema::dropIfExists('scores_historys');
    }
}
