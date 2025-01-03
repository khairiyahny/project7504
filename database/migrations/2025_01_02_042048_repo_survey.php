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
        Schema::create('repo_survey', function (Blueprint $table) {
            $table->id(); 
            $table->text('nama_survey'); 
            $table->text('sifat'); 
            $table->text('unit_sampling_observasi'); 
            $table->text('tim');
            $table->text('kegiatan'); 
            $table->text('tingkat_kesulitan'); 
            $table->text('hasil_pengecekan'); 
            $table->text('pj'); 
            $table->text('jumlah_sampel'); 
            $table->text('tahun'); 
            $table->string('kuesioner')->nullable();
            $table->text('raw_data'); 
            $table->boolean('pengolahan_kab');
            $table->boolean('platform_pengolahan');
            $table->text('link_monitoring')->nullable(); 
            $table->text('link_webentry')->nullable();
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
        Schema::dropIfExists('repo_survey');
    }
};
