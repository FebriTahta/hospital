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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cabang_id')->nullable();
            $table->unsignedBigInteger('spesialis_id')->nullable();
            $table->string('nama_dokter');
            $table->longText('deskripsi_dokter')->nullable();
            $table->string('tempat_lahir_dokter')->nullable();
            $table->string('tanggal_lahir_dokter')->nullable();
            $table->string('telp_dokter')->nullable();
            $table->string('img_dokter')->nullable();
            $table->string('gender_dokter')->nullable();
            $table->longText('slug_dokter');
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
        Schema::dropIfExists('doctors');
    }
};
