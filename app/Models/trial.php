<?php

namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trial extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'email',
        'pasfoto'
    ];
}
