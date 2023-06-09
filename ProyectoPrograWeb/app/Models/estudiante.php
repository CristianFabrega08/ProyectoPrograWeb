<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estudiante extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'Estudiantes';
    protected $primaryKey = 'rut';

    public function propuestas(){
        return $this->hasMany('App\Models\propuestas');
    }
}
