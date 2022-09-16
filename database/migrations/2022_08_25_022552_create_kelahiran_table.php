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
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->string('status');
            $table->string('nama_bayi');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('akte');
            $table->string('user_id');
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
        Schema::dropIfExists('kelahiran');
    }
};
