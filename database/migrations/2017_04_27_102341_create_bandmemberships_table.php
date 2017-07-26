<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandmembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandmemberships', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('band_id');
            $table->unsignedInteger('instrument_id');
            $table->timestamp('join_date')->nullable();
            $table->timestamp('leave_date')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'band_id', 'instrument_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandmemberships');
    }
}
