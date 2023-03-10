<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->unsignedBigInteger('id_pengaduan');       //relasi dari tabel pengaduan (id_pengaduan)
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->unsignedBigInteger('id_petugas');       //relasi dari tabel petugas (id_petugas)
            $table->timestamps();

            // mendefinisikan bahwa id_pengaduan dari tabel pengaduan berelasi ke tabel tanggapan
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan');
            // mendefinisikan bahwa id_petugas dari tabel petugas berelasi ke tabel tanggapan
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
};
