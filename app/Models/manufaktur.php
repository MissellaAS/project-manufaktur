<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufaktur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pegawai',
        'tanggal_pemeriksaan',
        'nama_mesin',
        'nomor_mesin',
        'kondisi_mesin',
        'komponen_kerusakan',
        'perawatan_besar',
        'catatan_kelayakan',
        
    ];
}
// Compare this snippet from www/project-manufaktur/resources/views/manufaktur/create.blade.php: