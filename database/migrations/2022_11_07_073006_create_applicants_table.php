<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namatim');
            $table->string('username'); //username tim ya ini
            $table->string('password'); // confirm password menurutku gausah
            $table->string('asalsekolah');
            $table->string('kota');
            $table->string('nama_ketua');
            $table->string('nisn_ketua');
            $table->string('nohp_ketua');
            $table->string('email_ketua');
            $table->string('nama_anggota1');
            $table->string('nisn_anggota1');
            $table->string('foto_ketua');
            $table->string('foto_anggota1');
            $table->string('kartu_pelajar_ketua');
            $table->string('kartu_pelajar_anggota1');
            $table->string('nama_pemilik_rekening');
            $table->string('bukti_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
