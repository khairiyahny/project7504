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
        Schema::create('opd_kegiatans', function (Blueprint $table) {
            $table->id(); 
            $table->date('tanggal');
            $table->text('nama_anggota_tim_sms'); 
            $table->text('opd_lokus'); 
            $table->text('lokus_lainnya'); 
            $table->text('jenis_kegiatan');
            $table->text('judul_kegiatan'); 
            $table->text('kunjungan'); 
            $table->text('nama_pegawai_opd'); 
            $table->text('jabatan_pegawai_opd'); 
            $table->text('topik_pendampingan');  
            $table->string('skor_pemahaman_gsbpm', 3);
            $table->string('skor_pemahaman_rekomstat', 3);
            $table->string('skor_pemahaman_metadata', 3);
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
        Schema::dropIfExists('opd_kegiatans');
    }
};
