<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanTpi extends Model
{
    use HasFactory;

    protected $table = 'tpi_kegiatans'; 

    protected $fillable = [
        'tanggal', 
        'nama_anggota_tim_sms', 
        'objek_kegiatan', 
        'kunjungan', 
        'nama_anggota_tpi_epss',
        'jabatan_anggota_tpi_epss',
        'opd_epss',
        'pendampingan_domain_1',
        'pendampingan_domain_2',
        'pendampingan_domain_3',
        'pendampingan_domain_4',
        'pendampingan_domain_5',
        'maturitas_kode_1',
        'maturitas_kode_2',
        'maturitas_kode_3',
        'maturitas_kode_4',
        'maturitas_kode_5',
        'resume', 
        'lokasi',
        'dokumentasi_kunjungan'
    ];
}
