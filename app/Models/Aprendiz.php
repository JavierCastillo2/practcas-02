<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
        protected $table = 'aprendiz';
        protected $primaryKey = 'id';

        protected $fillable = [
            'nombre',
            'apellido',
            'correo',
            'genero',
        ];
        public function company(){
            return $this->belongsTo('App\Models\Compani', 'companies_id');
        }
    
}
