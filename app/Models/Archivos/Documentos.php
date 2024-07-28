<?php

namespace App\Models\Archivos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;
    protected $table = 'documentos';
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'solicitud'
    ];
}
