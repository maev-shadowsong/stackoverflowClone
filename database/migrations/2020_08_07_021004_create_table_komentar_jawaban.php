<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('isi');
            $table->integer('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->integer('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_komentar_jawaban');
    }
}
