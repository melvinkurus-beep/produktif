<?php

namespace App\Models; // Sesuaikan dengan versi Laravel kamu (App atau App\Models)

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'jabatan', 'tahun_masuk', 'tahun_keluar',
    ];
}