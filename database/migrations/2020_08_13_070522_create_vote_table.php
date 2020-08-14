<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('value');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('diskusi_id');
            $table->foreign('diskusi_id')->references('id')->on('diskusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
}
