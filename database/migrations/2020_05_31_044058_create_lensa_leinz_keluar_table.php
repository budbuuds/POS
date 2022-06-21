<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLensaLeinzKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lensa_leinz_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lensa_leinz_id');
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
        Schema::dropIfExists('lensa_leinz_keluar');
    }
}
