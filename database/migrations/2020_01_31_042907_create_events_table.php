<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event')->nullable();
            $table->unsignedBigInteger('user1')->nullable();
            $table->foreign('user1')->references('id')->on('users');
            $table->unsignedBigInteger('user2')->nullable();
            $table->foreign('user2')->references('id')->on('users');
            $table->unsignedBigInteger('user3')->nullable();
            $table->foreign('user3')->references('id')->on('users');
            $table->unsignedBigInteger('user4')->nullable();
            $table->foreign('user4')->references('id')->on('users');
            $table->unsignedBigInteger('user5')->nullable();
            $table->foreign('user5')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
