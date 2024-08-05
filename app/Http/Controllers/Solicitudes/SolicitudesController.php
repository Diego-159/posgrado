<?php

namespace App\Http\Controllers\Solicitudes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Solicitudes\PersonalesStoreRequest;
use App\Models\Solicitudes\DatosPersonales;
use App\Models\Solicitudes\DatosEstudios;
use App\Models\Solicitudes\DatosTrabajo;
use App\Http\Requests\Solicitudes\EstudiosStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Solicitudes\TrabajoStoreRequest;

class SolicitudesController extends Controller
{
    //personales
    public function personales($programa){
        $personales = DatosPersonales::find(auth()->user()->id);
        return view('solicitudes.personales', compact('programa', 'personales'));
    }

    public function personalesStore($programa, PersonalesStoreRequest $request){
        //dd($request->all());
        $request->validated();
        $foto = $request->file('foto');
        $new_personales = new DatosPersonales;
        $new_personales->id = auth()->user()->id;
        $new_personales->fecha_nacimiento = $request->fecha_nacimiento;
        $new_personales->estado_civil = $request->estado_civil;
        $new_personales->ciudad = $request->ciudad;
        $new_personales->estado = $request->estado;
        $new_personales->telefono = $request->telefono;
        $new_personales->programa = $programa === 'doctorado' ? 1 : 0;
        $new_personales->foto = file_get_contents($foto->getRealPath());
        $new_personales->direccion = $request->direccion;
        $new_personales->save();
        return redirect()->route('solicitudes.estudios')->with('success', 'Datos personales guardados correctamente');
    }

    public function personalesUpdate($programa, PersonalesStoreRequest $request){
        $request->validated();
        $foto = $request->file('foto');
        $personales = DatosPersonales::find(auth()->user()->id);
        $personales->fecha_nacimiento = $request->fecha_nacimiento;
        $personales->estado_civil = $request->estado_civil;
        $personales->ciudad = $request->ciudad;
        $personales->estado = $request->estado;
        $personales->telefono = $request->telefono;
        $personales->programa = $programa === 'doctorado' ? 1 : 0;
        $personales->foto = file_get_contents($foto->getRealPath());
        $personales->direccion = $request->direccion;
        $personales->save();
        return redirect()->route('solicitudes.estudios')->with('success', 'Datos personales editados correctamente');
    }

    //estudios
    public function estudios(){
        return view('solicitudes.estudios');
    }

    public function estudiosStore(EstudiosStoreRequest $request){
        $request->validated();
        $new_estudios = new DatosEstudios;
        $new_estudios->id_user = auth()->user()->id;
        $new_estudios->grado = $request->gradol;
        $new_estudios->fecha_egreso = $request->fecha_egresol;
        $new_estudios->fecha_titulacion = $request->fecha_titulacionl;
        $new_estudios->promedio = $request->promediol;
        $new_estudios->nivel = 0;
        $new_estudios->save();

        if(auth()->user()->programa() === 'doctorado' || $request->mecanismo == 3){
            DB::table('institucion')->insert(['id_estudios' => $new_estudios->id, 'institucion' => $request->institucionl]);
        }
        else{
            DB::table('examenes')->insert(['id_estudios' => $new_estudios->id, 'num_extras' => $request->num_extras, 'adi_cnval' => $request->adi_cnval]);
        }

        DB::table('otrosestudios')->insert(['id' => auth()->user()->id, 'estudios' => $request->estudios]);

        if(auth()->user()->programa() === 'doctorado'){
            $new_estudiosm = new DatosEstudios;
            $new_estudiosm->id_user = auth()->user()->id;
            $new_estudiosm->grado = $request->gradom;
            $new_estudiosm->fecha_egreso = $request->fecha_egresom;
            $new_estudiosm->fecha_titulacion = $request->fecha_titulacionm;
            $new_estudiosm->promedio = $request->promediom;
            $new_estudiosm->nivel = 1;
            $new_estudiosm->save();

            DB::table('institucion')->insert(['id_estudios' => $new_estudiosm->id, 'institucion' => $request->institucionm]);
        }
        if (auth()->user()->programa() === 'maestria') DB::table('mecanismouser')->insert(['id_user' => auth()->user()->id, 'id_mecanismo' => $request->mecanismo]);
        return redirect()->route('solicitudes.trabajo')->with('success', 'Datos de estudios guardados correctamente');
    }

    //trabajo
    public function trabajo(){
        $trabajo = DatosTrabajo::find(auth()->user()->id);
        return view('solicitudes.trabajo', compact('trabajo'));
    }

    public function trabajoStore(TrabajoStoreRequest $request){
        $request->validated();
        $new_trabajo = new DatosTrabajo;
        $new_trabajo->id = auth()->user()->id;
        $new_trabajo->ocupacion = $request->ocupacion;
        $new_trabajo->direccion = $request->direccion;
        $new_trabajo->ciudad = $request->ciudad;
        $new_trabajo->estado = $request->estado;
        $new_trabajo->telefono = $request->telefono;
        $new_trabajo->save();
        return redirect()->route('archivos.index')->with('success', 'Datos de trabajo guardados correctamente');
    }

    public function trabajoUpdate(TrabajoStoreRequest $request, DatosTrabajo $trabajo){
        $trabajo->update($request->validated());
        return redirect()->route('archivos.index')->with('success', 'Datos de trabajo editados correctamente');
    }
}