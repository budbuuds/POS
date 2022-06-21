<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLensaKmccrKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lensa_kmccr_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lensa_kmccr_id')->unique();
            $table->integer('jumlah_keluar');
            $table->string('pj',50);
            $table->integer('tujuan_id')->unique();
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
        Schema::dropIfExists('lensa_kmccr_keluar');
    }
}
