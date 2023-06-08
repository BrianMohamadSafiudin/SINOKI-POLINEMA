<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oki extends Model
{
    use HasFactory;

    protected $table = 'okis';

    protected $fillable = [
        'nama'
    ];
}
