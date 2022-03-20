<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_times', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned()->comment('ID работника');
            $table->foreign('user_id')->references('id')->on('users');

            $table->date('date')->useCurrent()->comment('Дата рабочего дня');
            $table->time('begin')->useCurrent()->comment('Время начала рабочего дня');
            $table->time('end')->useCurrentOnUpdate()->comment('Время конца рабочего дня');
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
        Schema::dropIfExists('working_times');
    }
}
