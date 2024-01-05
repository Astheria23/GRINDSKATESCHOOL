<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'nomor_telepon',
        'email'
        'keterangan'
    ];
}
