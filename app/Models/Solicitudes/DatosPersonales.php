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
        'programa',
    ];

    public function estado_civil(){
        if($this->estado_civil == 1){
            return 'Soltero';
        }elseif($this->estado_civil == 2){
            return 'Casado';
        }elseif($this->estado_civil == 3){
            return 'Divorciado';
        }elseif($this->estado_civil == 4){
            return 'Viudo';
        }
    }
}
