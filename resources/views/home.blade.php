@extends('layouts.nav', ['accion' => 'inicio'])

@section('content')
    <div class="items-center relative flex flex-col">
        <h1 class="text-xl font-bold">¿Qué proceso desea hacer?</h1>
        <div class="flex justify-center p-3">
            <a href="{{ route('maestria.index') }}"
                class="m-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Maestria</a>
            <a href="{{ route('doctorado.index') }}"
                class="m-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Doctorado</a>
        </div>
    </div>
@endsection