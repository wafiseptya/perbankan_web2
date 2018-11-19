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
            $table->date('birth_date');
            $table->string('post_code');
            $table->string('phone');
            $table->string('ibu_kandung');
            $table->enum('pendapatan', ['value1', 'value2', 'value3', 'value4']);
            $table->enum('pengeluaran', ['value1', 'value2', 'value3', 'value4']);
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
