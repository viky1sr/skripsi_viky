<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilePembayaranHomeCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_pembayaran_home_cares', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('file_pembayaran_home_cares', function($table) {
            $table->unsignedBigInteger('file_id');

            $table->foreign('file_id')->references('id')->on('files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_pembayaran_home_cares');
    }
}
