<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('wa')->nullable();
            $table->string('type_booking');
            $table->string('list_service');
            $table->date('date_booking');
            $table->string('hour_booking');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('number_phone');
            $table->string('address');
            $table->timestamps();
        });

//        Schema::table('frontend_bookings', function($table) {
//            $table->unsignedBigInteger('district_id');
//            $table->unsignedBigInteger('village_id');
//
//            $table->foreign('district_id')->references('id')->on('districts');
//            $table->foreign('village_id')->references('id')->on('villages');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_bookings');
    }
}
