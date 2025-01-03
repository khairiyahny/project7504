<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepoSurvey extends Model
{
    use HasFactory;

    protected $table = 'repo_survey';
    protected $fillable = [
        'nama_survey', 'sifat', 'unit_sampling_observasi', 'tim', 'kegiatan', 
        'tingkat_kesulitan', 'hasil_pengecekan', 'pj', 'jumlah_sampel', 'tahun',
        'raw_data', 'pengolahan_kab', 'platform_pengolahan', 'link_monitoring', 'link_webentry',
    ];
}
