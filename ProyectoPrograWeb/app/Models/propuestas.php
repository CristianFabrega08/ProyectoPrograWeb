<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class propuestas extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'Propuestas';
    protected $foreignKey = 'estudiante_rut';

    public function estudiante(){
        return $this->belongsTo('App\Models\estudiante');
    }
}
