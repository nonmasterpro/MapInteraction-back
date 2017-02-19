<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RouteStation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_route_id')->foreign()
            ->references('id')->on('bus_routes')
            ->onDelete('cascade');
            $table->integer('bus_station_id')->foreign()
            ->references('id')->on('bus_stations')
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
        Schema::dropIfExists('routes_stations');
    }
}
