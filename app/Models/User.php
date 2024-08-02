<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Solicitudes\DatosEstudios;
use App\Models\Solicitudes\DatosPersonales;
use App\Models\Solicitudes\DatosTrabajo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function FIE(){
        $dominio = explode('@', $this->email);
        if ($dominio[1] == 'umich.com.mx') {
            return true;
        } else {
            return false;
        }
    }

    public function mecanismo(){
        $mecanismo = DB::table('mecanismouser')->where('id_user', $this->id)->first();
        return $mecanismo ? $mecanismo->id_mecanismo : null;
    }
    public function personales(){
        return DatosPersonales::find($this->id) ? true : false;
    }
    public function estudios(){
        return DatosEstudios::where('id_user', $this->id)->first() ? true : false;
    }
    public function programa(){
        if(DatosPersonales::find($this->id)){
            return DatosPersonales::find($this->id)->programa == 1 ? 'doctorado' : 'maestria';
        }
        return null;
    }
    public function trabajo(){
        return DatosTrabajo::find($this->id) ? true : false;
    }
}
