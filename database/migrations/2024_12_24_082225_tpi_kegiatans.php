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
        Schema::create('tpi_kegiatans', function (Blueprint $table) {
            $table->id(); 
            $table->date('tanggal');
            $table->text('nama_anggota_tim_sms'); 
            $table->text('objek_kegiatan'); 
            $table->text('kunjungan'); 
            $table->text('nama_anggota_tpi_epss'); 
            $table->text('jabatan_anggota_tpi_epss'); 
            $table->text('opd_epss');
            $table->text('pendampingan_domain_1');
            $table->text('pendampingan_domain_2');
            $table->text('pendampingan_domain_3');
            $table->text('pendampingan_domain_4');
            $table->text('pendampingan_domain_5');
            $table->text('maturitas_kode_1');
            $table->text('maturitas_kode_2');
            $table->text('maturitas_kode_3');
            $table->text('maturitas_kode_4');
            $table->text('maturitas_kode_5');
            $table->text('resume'); 
            $table->text('lokasi'); 
            $table->string('dokumentasi_kunjungan')->nullable();
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
        Schema::dropIfExists('tpi_kegiatans');
    }
};
