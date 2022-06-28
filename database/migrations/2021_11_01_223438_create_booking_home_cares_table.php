<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingHomeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_home_cares', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('status')->default(0);
            $table->date('date_booking');
            $table->string('jam_booking');
            $table->string('hari_booking');
            $table->string('number_phone');
            $table->text('address');
            $table->timestamps();
        });

        Schema::table('booking_home_cares', function($table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('village_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_home_cares');
    }
}
