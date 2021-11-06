<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructor';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
    ];
    public function usuarios(){
        return $this->belongsTo('App\Models\User', 'users_id');
    }
}
