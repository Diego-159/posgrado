<?php

namespace App\Models\Paises;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    use HasFactory;
    protected $table = 'paises';
    protected $fillable = [
        'pais'
    ];
}
