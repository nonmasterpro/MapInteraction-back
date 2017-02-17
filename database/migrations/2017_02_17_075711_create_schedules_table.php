<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day');
            $table->string('courseName');
            $table->string('start');
            $table->string('end');
            $table->integer('user_id')->foreign()
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->unsignedInteger('place_id')->nullable()->foreign()
            ->references('id')->on('places')
            ->onDelete('cascade');
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
        Schema::dropIfExists('schedules');
    }
}
