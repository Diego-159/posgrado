<?php

namespace App\Models\Solicitudes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosTrabajo extends Model
{
    use HasFactory;
    protected $table = 'datosTrabajo';
    protected $fillable = [
        'ocupacion',
        'direccion',
        'ciudad',
        'estado',
        'telefono',
    ];
}
