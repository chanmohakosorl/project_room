<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_utilities', function (Blueprint $table) {
            $table->id();
            $table->integer('room_info_id')->unsigned();
            $table->string('month');
            $table->integer('water_old_counter');
            $table->integer('water_new_counter');
            $table->timestamps();

            $table->foreign('room_info_id')->references('id')->on('room_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_utilities');
    }
}
