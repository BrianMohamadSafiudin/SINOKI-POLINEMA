<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class tugasproker extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'tugasprokers';

    protected $fillable = [
        'namatugas',
        'sie',
        'tenggatwaktu',
        'status',
        'pengumpulan',
        'evaluasi',
        'file',
        'idProker'
    ];
}
