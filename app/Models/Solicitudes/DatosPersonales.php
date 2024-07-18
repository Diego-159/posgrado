<?php

namespace App\Models\Solicitudes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    use HasFactory;
    protected $table = 'datospersonales';
    public $timestamps = false;
    protected $fillable = [
        'fecha_nacimiento',
        'estado_civil', 
        'ciudad', 
        'estado', 
        'telefono', 
        'foto',
        'direccion', 
    ];
}
