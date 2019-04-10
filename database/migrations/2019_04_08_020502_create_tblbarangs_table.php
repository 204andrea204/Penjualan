<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbarangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->integer('kodejenis');
            $table->integer('harganet');
            $table->integer('hargajual');
            $table->integer('stok');
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
        Schema::dropIfExists('tblbarangs');
    }
}
