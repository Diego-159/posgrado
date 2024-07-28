@extends('layouts.nav', ['accion' => auth()->user()->programa()])

@section('content')
<div class="flex flex-col justify-center items-center w-full my-8">
    @if(session('success'))
        <p id="success" class="w-full bg-green-300 text-sm text-bold px-8 py-2 text-center">{{ session('success') }}<button id="closeSuccess" class="float-right font-bold text-lg">X</button></p>
@endif
<h2 class="text-2xl font-extrabold text-center p-4 text-blue-900 rounded-full border-2 border-[#b69f5c] m-4">3. Ocupación y Datos del Trabajo</h2>
    
    <div class="flex m-4">
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-red-800" href="{{ route('solicitudes.estudios') }}">Regresar</a>
        @if(auth()->user()->trabajo())
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-blue-900" href="{{ route('archivos.index') }}">Siguiente</a>
        @endif

        </div>
        <form action="{{ is_null($trabajo) ? route('solicitudes.trabajo.store') : route('solicitudes.trabajo.update') }}" method="POST" class="w-[90%] bg-[#b69f5c] rounded-2xl flex flex-col font-bold text-lg p-8">
            @csrf
            <div class="flex flex-col pb-4">
                <label for="ocupacion">Ocupación Actual:</label>
                <input type="text" name="ocupacion" id="ocupacion"  class="rounded-xl w-1/2 font-normal" placeholder="Ocupación" value="{{ is_null($trabajo) ? '' : $trabajo->ocupacion }}">
            </div>
            @error('ocupacion')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="direccion">Dirección Postal:</label>
                <input type="texto" name="direccion" id="direccion" class="rounded-xl w-11/12 font-normal" placeholder="Nombre Calle #123, Nombre Colonia, C.P.12345" value="{{ is_null($trabajo) ? '' : $trabajo->direccion }}">
            </div>
            @error('direccion')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="ciudad">Ciudad:</label>
                <input type="texto" name="ciudad" id="ciudad" class="rounded-xl w-1/5 font-normal" placeholder="Ciudad" value="{{ is_null($trabajo) ? '' : $trabajo->ciudad }}">
            </div>
            @error('ciudad')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="estado">Estado:</label>
                <input type="texto" name="estado" id="estado" class="rounded-xl w-1/5 font-normal" placeholder="Estado" value="{{ is_null($trabajo) ? '' : $trabajo->estado }}">
            </div>
            @error('estado')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="telefono">Telefono:</label>
                <input type="texto" name="telefono" id="telefono" class="rounded-xl w-1/5 font-normal" placeholder="123-456-7890" value="{{ is_null($trabajo) ? '' : $trabajo->telefono }}">
            </div>
            @error('telefono')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
                <div class="flex px-4">
                    <button type="submit" class="ml-auto rounded-2xl py-2 px-4 text-white bg-[#013281] hover:bg-[#b69f5c]">Enviar</button>
                </div>
        </form>
    </div>

    <script>
        document.getElementById('telefono').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '' + x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
        });

        
        const success = document.getElementById('success');
        const closeSuccess = document.getElementById('closeSuccess');
        closeSuccess.addEventListener('click', () => {
            success.style.display = 'none';
        });
    </script>

@endsection