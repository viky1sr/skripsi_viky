<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeBookingBabySpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_booking_baby_spas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('type_booking_baby_spas', function($table) {
            $table->unsignedBigInteger('info_booking_id');
            $table->unsignedBigInteger('baby_spa_id');

            $table->foreign('info_booking_id')->references('id')->on('booking_baby_spas');
            $table->foreign('baby_spa_id')->references('id')->on('master_baby_spas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_booking_baby_spas');
    }
}
