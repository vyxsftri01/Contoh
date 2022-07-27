<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_identitas');
            $table->unsignedBigInteger('id_pemesanans');
            $table->unsignedBigInteger('id_transaksis');
            $table->unsignedBigInteger('id_villas');
            $table->string('total');
            // membuat fk id_siswa yang mengacu kpd field id di table
            // siswas
            $table->foreign('id_identitas')->references('id')->on('identitas')
                ->onDelete('cascade');
                $table->foreign('id_pemesanans')->references('id')->on('pemesanans')
                ->onDelete('cascade');
                $table->foreign('id_transaksis')->references('id')->on('transaksis')
                ->onDelete('cascade');
                $table->foreign('id_villas')->references('id')->on('villas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('riwayats');
    }
}
