<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profesor extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'Profesores';
    protected $primaryKey = 'rut';
}
