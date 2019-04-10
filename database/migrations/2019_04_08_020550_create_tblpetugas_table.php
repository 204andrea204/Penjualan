<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpetugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idpetugas');
            $table->string('namapetugas');
            $table->string('alamat');
            $table->string('email');
            $table->integer('telepon');
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
        Schema::dropIfExists('tblpetugas');
    }
}
