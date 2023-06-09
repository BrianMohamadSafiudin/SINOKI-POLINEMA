<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAnggotaProker extends Model
{
    use HasFactory;

    protected $table = 'daftar_anggota_prokers';

    protected $fillable = [
        'nama',
        'sie',
        'idProker'
    ];
}
