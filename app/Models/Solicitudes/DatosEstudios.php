<?php

namespace App\Models\Solicitudes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEstudios extends Model
{
    use HasFactory;
    protected $table = 'datosEstudios';
    public $timestamps = false;
    protected $fillable = [
        'grado',
        'fecha_egreso',
        'fecha_titulacion',
        'promedio',
        'nivel'
    ];
}
