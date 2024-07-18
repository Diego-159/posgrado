@extends('layouts.nav', ['accion' => $programa])

@section('content')
<style>
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="flex flex-col justify-center items-center w-full my-8">
    @if(session('success'))
        <p id="success" class="w-full bg-green-300 text-sm text-bold px-8 py-2 text-center">{{ session('success') }}<button id="closeSuccess" class="float-right font-bold text-lg">X</button></p>
    @endif
    <h2 class="text-2xl font-extrabold text-center p-4 text-blue-900 rounded-full border-2 border-[#b69f5c] m-4">2. Estudios Realizados</h2>
        <div class="flex m-4">
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-red-800 font-bold" href="{{ route('solicitudes.personales', ['programa' => $programa]) }}">Regresar</a>
        @if(auth()->user()->estudios())
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-blue-900" href="{{ route('solicitudes.trabajo', ['programa' => $programa]) }}">Siguiente</a>
        @endif
        </div>
        <form action="" method="POST" class="w-[90%] bg-[#b69f5c] rounded-2xl flex flex-col font-bold text-lg p-8">
            @csrf
            <div class="flex flex-col pb-4">
                <label for="rama">Escoge un Programa</label>
                <select name="rama" id="rama" class="rounded-xl w-1/5 font-normal px-4 py-2">
                    <option value="" selected hidden>Selecciona un programa</option>
                    <option value="1">Sistemas eléctricos</option>
                    <option value="2">Sistemas de control</option>
                    <option value="3">Sistemas computacionales</option>
                </select>
                @error('rama')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="grado">Licenciatura:</label>
                <input type="text" name="gradol" id="gradol"  class="rounded-xl w-1/5 font-normal px-4 py-2" placeholder="Licenciatura">
            </div>
            @error('grado')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
        @if($mecanismo == (1 || 2) || $programa === 'doctorado')
            <div class="flex flex-col pb-4">
                <label for="institucionl">Institución:</label>
                <input type="texto" name="institucionl" id="institucionl" class="rounded-xl w-11/12 font-normal px-4 py-2" placeholder="Institución">
            </div>
            @error('institucionl')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
        @elseif($mecanismo == 3)
        <div class="flex flex-col pb-4">
            <label for="num_extras">Número de exámenes extraordinarios:</label>
            <input type="number" name="num_extras" id="num_extras" class="rounded-xl w-1/12 font-normal px-4 py-2" placeholder="0">
        </div>
        @error('num_extras')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
        <div class="flex flex-col pb-4">
            <label for="adi_cnval">{{ auth()->user()->FIE() ? 'Número de exámenes extraordinarios de regularización:' : 'Calificación del exámen CENEVAL EXANI III:'}}</label>
            <input type="number" name="adi_cnval" id="adi_cnval" class="rounded-xl w-1/12 font-normal px-4 py-2" placeholder="0" {{ auth()->user()->FIE() ? '' : 'step="0.01"' }}>
        </div>
        @error('adi_cnval')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
        @endif
            <div class="flex flex-col pb-4">
                <label for="fecha_egresol">Fecha de Egreso:</label>
                <input type="date" name="fecha_egresol" id="fecha_egresol" class="rounded-xl w-1/5 font-normal px-4 py-2" value="2000-01-01">
            </div>
            @error('fecha_egresol')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="fecha_titulacionl">Fecha de Titulación:</label>
                <input type="date" name="fecha_titulacionl" id="fecha_titulacionl" class="rounded-xl w-1/5 font-normal px-4 py-2" value="2000-01-01">
            </div>
            @error('fecha_titulacionl')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="promediol">Promedio:</label>
                <input type="number" name="promediol" id="promediol" class="rounded-xl w-1/12 font-normal px-4 py-2" step="0.01" placeholder="10.0">
            </div>
            @error('promediol')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="estudios">Otros Estudios:</label>
                <input type="text" name="estudios" id="estudios" class="rounded-xl w-11/12 font-normal px-4 py-2" placeholder="Otros Estudios">
            </div>
            @error('estudios')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror

    @if($programa === 'doctorado')
            @csrf
            <div class="flex flex-col pb-4">
                <label for="gradom">Maestria:</label>
                <input type="texto" name="gradom" id="gradom" class="rounded-xl w-1/2 font-normal px-4 py-2" placeholder="Maestria">
            </div>
            @error('gradom')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="institucionm">Institucion:</label>
                <input type="text" name="institucionm" id="institucionm" class="rounded-xl w-11/12 font-normal px-4 py-2" placeholder="123-456-7890">
            </div>
            @error('institucionm')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="fecha_egresom">Fecha de Egreso:</label>
                <input type="date" name="fecha_egresom" id="fecha_egresom" class="rounded-xl w-1/5 font-normal px-4 py-2" value="2000-01-01">
            </div>
            @error('fecha_egresom')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="fecha_titulacionm">Fecha de Titulación:</label>
                <input type="date" name="fecha_titulacionm" id="fecha_titulacionm" class="rounded-xl w-1/5 font-normal px-4 py-2" value="2000-01-01">
            </div>
            @error('fecha_titulacionm')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="promediom">Promedio:</label>
                <input type="number" name="promediom" id="promediom" class="rounded-xl w-1/12 font-normal px-4 py-2" step="0.01" placeholder="10.0">
                @error('promediom')
                <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
            @enderror
            </div>
    
    @endif
    <div class="flex px-4">
        <button type="submit" class="ml-auto rounded-2xl py-2 px-4 text-white bg-[#013281] hover:bg-[#b69f5c]">Enviar</button>
    </div>
</form>
</div>

    <script>
        const success = document.getElementById('success');
        const closeSuccess = document.getElementById('closeSuccess');
        closeSuccess.addEventListener('click', () => {
            success.style.display = 'none';
        });
    </script>
@endsection