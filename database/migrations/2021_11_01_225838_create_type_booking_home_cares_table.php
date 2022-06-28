<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeBookingHomeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_booking_home_cares', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('type_booking_home_cares', function($table) {
            $table->unsignedBigInteger('info_booking_id');
            $table->unsignedBigInteger('home_care_id');

            $table->foreign('info_booking_id')->references('id')->on('booking_home_cares');
            $table->foreign('home_care_id')->references('id')->on('master_home_cares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_booking_home_cares');
    }
}
