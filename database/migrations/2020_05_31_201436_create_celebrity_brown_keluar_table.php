<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelebrityBrownKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrity_brown_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('celebrity_brown_id');
            $table->integer('jumlah_keluar');
            $table->string('pj',50);
            $table->integer('tujuan_id');
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
        Schema::dropIfExists('celebrity_brown_keluar');
    }
}
