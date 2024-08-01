@extends('layouts.nav', ['accion' => 'maestria'])

@section('content')
    <div class="grid grid-cols-3 gap-4 m-8">
        <div class="bg-gray-300 rounded-2xl p-8 shadow-lg shadow-[#b69f5c] text-center">
            <p class="text-xl font-extrabold pb-4">Examen de admisión</p>
            <p class="text-sm pb-4">Consta de presentar y acreditar el examen, sobre cuatro temas (dos temas comunes para las tres opciones y dos temas dependiendo la opción a seleccionar).</p>
            <ul>
                <li>-Temas comunes: <a href="{{ asset('posgrado/public/guias/PropeMatematicas.pdf') }}">Matemáticas</a> y <a href="{{ asset('posgrado/public/guias/PropeMetodosNumericos_Computacion.pdf') }}">Métodos numéricos</a></li>
                <li>-Temas de Sistemas de control y Sistemas eléctricos: <a href="{{ asset('posgrado/public/guias/PropeControlAutomatico.pdf') }}">Control automático</a> y <a href="{{ asset('posgrado/public/guias/PropeTeoriaCircuitos.pdf') }}">Teoría de Circuitos</a></li>
                <li>-Temas de Sistemas Computacionales: <a href="{{ asset('posgrado/public/guias/PropeMatematicasDiscretas.pdf') }}">Matemáticas discretas</a>, <a href="{{ asset('posgrado/public/guias/PropeProgramacionEstructuraDatos.pdf') }}">Programación</a> y <a href="{{ asset('posgrado/public/guias/PropeProgramacionEstructuraDatos.pdf') }}">Estructura de datos</a></li>
            </ul>
        </div>
        <div class="bg-gray-300 rounded-2xl p-8 shadow-lg shadow-[#b69f5c] text-center">
            <p class="text-xl font-extrabold pb-4">Curso propedéutico</p>
            <p class="text-sm">Cursar y aprobar un curso propedéutico por cada tema del examen de admisión.
                Cada curso tiene una duración que depende de las necesidades de la opción elegida por el aspirante, y abarca los temas de los exámenes de admisión. Los cursos se pueden cubrir durante el transcurso de un semestre previo al único de la maestría.</p>
        </div>
        <div class="bg-gray-300 rounded-2xl p-8 shadow-lg shadow-[#b69f5c] text-center">
            <p class="text-xl font-extrabold pb-4">Ingreso por promedio</p>
            <p class="text-sm"> {{ auth()->user()->FIE() ? 'Los estudiantes egresados de la Facultad de Ingeniería Eléctrica de la UMSNH que cuenten con un promedio general mínimo de 8.0 (ocho) podrán ingresar directamente al programa de maestría. Los egresados de los programas de Ingeniería Eléctrica o Ingeniería Electrónica, podrán ingresar a las opciones de Sistemas de Control y Sistemas Eléctricos; los egresados de Ingeniería en Computación podrán ingresar a la opción de Sistemas Computacionales.' 
            : 'Los egresados que cuenten con un promedio general mínimo de licenciatura de 8.0 (ocho) y que hayan obtenido Testimonio de Desempeño Sobresaliente en el “Examen General de Egreso de Licenciatura” (EGEL) aplicado por el CENEVAL, podrán ingresar a esta maestría. Los egresados de programas de Ingeniería Eléctrica o Ingeniería Electrónica o a fines, podrán ingresar a las opciones de Sistemas de Control y Sistemas Eléctricos; los egresados de Ingeniería en Computación o a fines podrán ingresar a la opción de Sistemas Computacionales.'}} </p>
        </div>
    </div>

    <div class="m-8 w-full flex justify-center">
        <a class="bg-green-600 p-4 shadow shadow-slate-700 rounded-2xl text-lg font-extrabold text-white w-48" href="{{ route('solicitudes.index', ['programa' => 'maestria']) }}" >¡¡Iniciar Proceso!!</a>
    </div>

@endsection