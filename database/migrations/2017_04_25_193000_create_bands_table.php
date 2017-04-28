<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('genre_id');
            $table->string('country');
            $table->timestamps();
        });

        // Schema::create('band_user', function (Blueprint $table) {
        //     $table->integer('band_id');
        //     $table->integer('user_id');
        //     $table->primary(['band_id', 'user_id']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bands');
        // Schema::dropIfExists('band_user');
    }
}
