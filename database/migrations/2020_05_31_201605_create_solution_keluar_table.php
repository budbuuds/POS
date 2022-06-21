<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('solution_id');
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
        Schema::dropIfExists('solution_keluar');
    }
}
