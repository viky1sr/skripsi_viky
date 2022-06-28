<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPembayaranHomeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_pembayaran_home_cares', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('home_care');
            $table->timestamps();
        });

        Schema::table('info_pembayaran_home_cares', function($table) {
            $table->unsignedBigInteger('info_booking_id');
            $table->unsignedBigInteger('file_pembayaran_id');

            $table->foreign('info_booking_id')->references('id')->on('booking_home_cares');
            $table->foreign('file_pembayaran_id')->references('id')->on('file_pembayaran_home_cares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_pembayaran_home_cares');
    }
}
