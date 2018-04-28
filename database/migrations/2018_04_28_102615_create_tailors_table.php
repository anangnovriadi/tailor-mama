<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTailorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelanggan');
            $table->string('nama_jahitan');
            $table->integer('ongkos_jahitan');
            $table->integer('jumlah_jahitan');
            $table->integer('total_harga');
            $table->integer('estimasi_selesai');
            $table->dateTime('tgl_masuk');
            $table->dateTime('tgl_diambil');
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
        Schema::dropIfExists('tailors');
    }
}
