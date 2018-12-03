<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_hargas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('toko')->index();
            $table->string('ukuran');
            $table->string('berwarna');
            $table->string('bnw');
            $table->timestamps();

            $table->foreign('toko')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_hargas');
    }
}
