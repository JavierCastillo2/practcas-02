<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;

    protected $table = 'guia';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tema',
        'duracion',
    ];

}
