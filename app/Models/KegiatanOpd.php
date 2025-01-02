<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOpd extends Model
{
    use HasFactory;

    protected $table = 'opd_kegiatans'; 

    protected $fillable = [
        'tanggal', 
        'nama_anggota_tim_sms', 
        'opd_lokus', 
        'lokus_lainnya', 
        'jenis_kegiatan', 
        'judul_kegiatan',
        'kunjungan', 
        'nama_pegawai_opd', 
        'jabatan_pegawai_opd',
        'topik_pendampingan', 
        'skor_pemahaman_gsbpm',
        'skor_pemahaman_rekomstat', 
        'skor_pemahaman_metadata',
        'resume', 
        'lokasi',
        'dokumentasi_kunjungan'
    ];
}
