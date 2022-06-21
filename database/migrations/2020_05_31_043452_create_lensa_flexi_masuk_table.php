<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLensaFlexiMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lensa_flexi_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lensa_flexi_id')->unique();
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
        Schema::dropIfExists('lensa_flexi_masuk');
    }
}
