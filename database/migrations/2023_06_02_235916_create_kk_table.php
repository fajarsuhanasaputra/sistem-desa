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
        Schema::create('kk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('kepala_keluarga');
            $table->enum('rt', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->enum('rw', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->enum('dusun', ['Ciomas', 'Ciceuri', 'Baros', 'Cidahu', 'Landeuh', 'Hanjatan', 'Cikareo', 'Bojongsari', 'Bojongsereh', 'Cadasngampar', 'Cangkuang']);
            $table->string('jumlah_keluarga');
            $table->string('upload_ktp');
            $table->string('sp_rt_rw');
            $table->string('filekk')->nullable();
            $table->enum('status', ['Diterima', 'Ditolak', 'Diproses'])->default('Diproses');
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
        Schema::dropIfExists('kk');
    }
};
