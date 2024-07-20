<?php

namespace App\Http\Controllers\Solicitudes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Solicitudes\PersonalesStoreRequest;
use App\Models\Solicitudes\DatosPersonales;
use App\Models\Solicitudes\DatosEstudios;
use App\Http\Requests\Solicitudes\EstudiosStoreRequest;

class SolicitudesController extends Controller
{
    //personales
    public function personales($programa){
        $personales = DatosPersonales::find(auth()->user()->id);
        return view('solicitudes.personales', compact('programa', 'personales'));
    }

    public function personalesStore($programa, PersonalesStoreRequest $request){
        $request->validated();
        $foto = $request->file('foto');
        $new_personales = new DatosPersonales;
        $new_personales->id = auth()->user()->id;
        $new_personales->fecha_nacimiento = $request->fecha_nacimiento;
        $new_personales->estado_civil = $request->estado_civil;
        $new_personales->ciudad = $request->ciudad;
        $new_personales->estado = $request->estado;
        $new_personales->telefono = $request->telefono;
        $new_personales->bandera = $programa === 'doctorado' ? 1 : 0;
        //$new_personales->foto = file_get_contents($foto->getRealPath());
        $new_personales->direccion = $request->direccion;
        $new_personales->save();
        if ($programa === 'maestria') DB::table('mecanismouser')->insert(['id_user' => auth()->user()->id, 'id_mecanismo' => $request->mecanismo]);
        return redirect()->route('solicitudes.estudios', ['programa' => $programa])->with('success', 'Datos personales guardados correctamente');
    }

    public function personalesUpdate($programa, PersonalesStoreRequest $request){
        $request->validated();
        $personales = DatosPersonales::find(auth()->user()->id);
        $personales->fecha_nacimiento = $request->fecha_nacimiento;
        $personales->estado_civil = $request->estado_civil;
        $personales->ciudad = $request->ciudad;
        $personales->estado = $request->estado;
        $personales->telefono = $request->telefono;
        $personales->bandera = $programa === 'doctorado' ? 1 : 0;
        $personales->direccion = $request->direccion;
        $personales->save();
        if ($programa === 'maestria') DB::table('mecanismouser')->where('id_user', auth()->user()->id)->update(['id_mecanismo' => $request->mecanismo]);
        return redirect()->route('solicitudes.estudios', ['programa' => $programa])->with('success', 'Datos personales editados correctamente');
    }

    //estudios
    public function estudios($programa){
        return view('solicitudes.estudios', compact('programa'));
    }

    public function estudiosStore($programa, EstudiosStoreRequest $request){
        $request->validated();
        dd($request->all());
        $new_estudios = new DatosEstudios;
        $new_estudios->save();
        return redirect()->route('solicitudes.trabajo', compact('programa'))->with('success', 'Datos de estudios guardados correctamente');

    }

    //trabajo
    public function trabajo($programa){
        return view('solicitudes.trabajo', ['programa' => $programa]);
    }
}
