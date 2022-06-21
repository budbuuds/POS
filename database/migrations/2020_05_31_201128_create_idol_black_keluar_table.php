<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdolBlackKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idol_black_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idol_black_id');
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
        Schema::dropIfExists('idol_black_keluar');
    }
}
