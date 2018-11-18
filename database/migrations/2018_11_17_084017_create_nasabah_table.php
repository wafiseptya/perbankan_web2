<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('birth_place');
            $table->string('birth_date');
            $table->string('address');
            $table->string('post_code');
            $table->string('phone');
            $table->string('ibu_kandung');
            $table->string('pendapatan');
            $table->string('pengeluaran');
            $table->unsignedInteger('id_rekening');
            $table->foreign('id_rekening')->references('id')->on('rekening')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('nasabah');
    }
}
