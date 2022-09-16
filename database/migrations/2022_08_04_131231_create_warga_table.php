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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt');
            $table->string('rw');
            $table->string('Status_kk');
            $table->string('nama_kepalakk');
            $table->string('noregis');
            $table->string('noktp');
            $table->string('kader');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_perkawinan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('posyandu');
            $table->string('program_bkb');
            $table->string('tabungan');
            $table->string('paud');
            $table->string('akseptor_kb');
            $table->string('kelompok_bljr');
            $table->string('koperasi');
            $table->string('disabilitas');
            $table->string('asuransi');
            $table->string('jenis_asuransi');
            $table->string('kegiatan_warga');
            $table->string('keluarga_harapn');
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('warga');
    }
};
