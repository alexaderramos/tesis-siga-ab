<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->char('DNI',8)->unique();
            $table->string('LastName');
            $table->string('MiddleName');
            $table->string('Name');
            $table->date('Birthdate');
            $table->string('Address');
            $table->string('Phone');
            $table->string('Gender');
            $table->primary('DNI');
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
        Schema::dropIfExists('people');
    }
}
