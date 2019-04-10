<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbldistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldistributors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iddistributor');
            $table->string('namadistributor');
            $table->string('alamat');
            $table->string('kotaasal');
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
        Schema::dropIfExists('tbldistributors');
    }
}
