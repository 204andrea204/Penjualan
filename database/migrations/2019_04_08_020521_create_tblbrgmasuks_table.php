<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblbrgmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbrgmasuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nonota');
            $table->string('tglmasuk');
            $table->integer('iddistributor');
            $table->integer('idpetugas');
            $table->integer('total');
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
        Schema::dropIfExists('tblbrgmasuks');
    }
}
