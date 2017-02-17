<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fileName');

            // $table->integer('place_id')->unsigned()->nullable();
            // // $table->foreign('place_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('place_id')->references('id')->on('images')->onDelete('cascade');
            // $table->dropForeign('place_id');
            $table->unsignedInteger('place_id')->nullable();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('images');
    }
}
