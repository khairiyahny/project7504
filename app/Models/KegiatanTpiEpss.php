<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanTpiEpss extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'nama_kegiatan'];
}
