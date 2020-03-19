<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_historys', function (Blueprint $table) {
            $table->increments('id');
            $table->char('PaymentId',5);
            $table->integer('PaymentAmount');
            $table->string('PaymentMonth');
            $table->integer('PaymentDate');

            $table->foreign('PaymentId')->references('PaymentId')->on('payments');
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
        Schema::dropIfExists('payment_historys');
    }
}
