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
        Schema::create('tambahkegiatan', function (Blueprint $table) {
            $table->id(); 
            $table->date('tanggal');
            $table->text('nama_anggota_tim_sms'); 
            $table->text('opd_lokus'); 
            $table->text('lokus_lainnya'); 
            $table->text('jenis_kegiatan');
            $table->text('judul kegiatan'); 
            $table->text('kunjungan'); 
            $table->text('nama_pegawai_opd'); 
            $table->text('jabatan_pegawai_opd'); 
            $table->text('topik_pendampingan');  
            $table->text('skor_pemahaman_gsbpm'); 
            $table->text('skor_pemahaman_rekomstat'); 
            $table->text('skor_pemahaman_metadata'); 
            $table->text('resume'); 
            $table->text('dokumentasi_kunjungan'); 
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
        //
    }
};
