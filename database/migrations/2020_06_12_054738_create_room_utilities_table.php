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
            $table->increments('id');
            $table->date('month');
            $table->string('water_old_counter');
            $table->string('water_new_counter');
            $table->string('electricity_old_counter');
            $table->string('electricity_new_counter');
            $table->integer('room_info_id')->unsigned();
            $table->foreign('room_info_id')->references('id')->on('room_infos')->onDelete('cascade');
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
        Schema::dropIfExists('room_utilities');
    }
}
