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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_kk');
            $table->integer('jumlah_pus');
            $table->integer('jumlah_wus');
            $table->integer('jumlah_buta');
            $table->integer('jumlah_ibuhamil');
            $table->integer('jumlah_menyusui');
            $table->integer('jumlah_lansia');
            $table->integer('jumlah_kebutuhanusus');
            $table->integer('jumlah_stunting');
            $table->string('makanan_pokok');
            $table->string('jamban_klrg');
            $table->string('sumber_air');
            $table->string('tempat_sampah');
            $table->string('air_limbah');
            $table->string('stiker_pak');
            $table->string('upwk2');
            $table->string('kriteria_rumah');
            $table->string('act_kukl');
            $table->string('lahan_kerja');
            $table->foreignId('user_id')->constrained();
            $table->string('rw');
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
        Schema::dropIfExists('keluarga');
    }
};
