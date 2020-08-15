<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToDiskusi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diskusi', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pertanyaan_id')->nullable();
            $table->unsignedBigInteger('jawaban_id')->nullable();
            $table->unsignedBigInteger('jawaban_tepat_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pertanyaan_id')->references('id')->on('diskusi');
            $table->foreign('jawaban_id')->references('id')->on('diskusi');
            $table->foreign('jawaban_tepat_id')->references('id')->on('diskusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diskusi', function (Blueprint $table) {
            //
        });
    }
}
