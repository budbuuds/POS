<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdolBrownMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idol_brown_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idol_brown_id');
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
        Schema::dropIfExists('idol_brown_masuk');
    }
}
