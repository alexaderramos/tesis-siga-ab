<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->char('PaymentId',5);
            $table->char('CodStudent',10);
            $table->char('DNI',8);
            $table->foreign('CodStudent')->references('CodStudent')->on('students');
            $table->foreign('DNI')->references('DNI')->on('people');
            $table->primary('PaymentId');
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
        Schema::dropIfExists('payments');
    }
}
