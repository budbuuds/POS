<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLensaKmccrMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lensa_kmccr_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lensa_kmccr_id')->unique();
            $table->integer('jumlah_masuk');
            $table->string('pj',50);
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
        Schema::dropIfExists('lensa_kmccr_masuk');
    }
}
