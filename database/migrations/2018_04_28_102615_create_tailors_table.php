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
            $table->unsignedInteger('pelanggan_id');
            $table->foreign('pelanggan_id')->references('id')->on('customers');
            $table->string('nama_jahitan', 50);
            $table->integer('ongkos_jahitan');
            $table->integer('jumlah_jahitan');
            $table->integer('total_harga');
            $table->integer('estimasi_selesai');
            $table->dateTime('tgl_masuk');
            $table->dateTime('tgl_diambil')->nullable();
            $table->boolean('verification_type');
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
