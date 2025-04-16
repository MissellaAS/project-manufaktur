<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufaktur extends Model
{
    use HasFactory;

    protected $table = 'project_manufaktur'; // Nama tabel di database

    protected $fillable = [
        'nama_pegawai',
        'tanggal_pemeriksaan',
        'nama_mesin',
        'nomor_mesin',
        'kondisi_mesin',
        'komponen_kerusakan',
        'memerlukan_perawatanbesar_atau_tidak',
        'catatan_kelayakan',
    ];
}
// Compare this snippet from www/project-manufaktur/resources/views/manufaktur/create.blade.php: