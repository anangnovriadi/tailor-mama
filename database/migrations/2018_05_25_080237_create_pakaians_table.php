<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePakaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakaians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pakaian', 50);
            $table->string('model_pakaian');
            $table->float('harga');
            $table->bigInteger('stok_pakaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakaians');
    }
}
