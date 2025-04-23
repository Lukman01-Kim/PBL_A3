<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'nomor_induk_siswa',
        'jenis_kelamin',
        'kelas',
        'tanggal_lahir',
        'alamat',
        'nama_ibu',
        'nama_ayah',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'penghasilan_ayah',
        'penghasilan_ibu',
        'hp_ayah',
        'hp_ibu',
        'status',
    ];
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;
}
