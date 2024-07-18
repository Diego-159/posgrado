@extends('layouts.nav', ['accion' => $programa])

@section('content')
<div class="flex flex-col justify-center items-center w-full my-8">
<h2 class="text-2xl font-extrabold text-center p-4 text-blue-900 rounded-full border-2 border-[#b69f5c] m-4">3. Ocupación y Datos del Trabajo</h2>
    
    <div class="flex m-4">
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-red-800" href="{{ route('solicitudes.estudios', ['programa'=> $programa]) }}">Regresar</a>

        </div>
        <form action="" method="POST" class="w-[90%] bg-[#b69f5c] rounded-2xl flex flex-col font-bold text-lg p-8">
            @csrf
            <div class="flex flex-col pb-4">
                <label for="ocupacion">Ocupación Actual:</label>
                <input type="text" name="ocupacion" id="ocupacion"  class="rounded-xl w-1/2 font-normal" placeholder="Ocupación">
            </div>
            @error('ocupacion')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="direccion">Dirección Postal:</label>
                <input type="texto" name="direccion" id="direccion" class="rounded-xl w-11/12 font-normal" placeholder="Nombre Calle #123, Nombre Colonia, C.P.12345" >
            </div>
            @error('direccion')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="ciudad">Ciudad:</label>
                <input type="texto" name="ciudad" id="ciudad" class="rounded-xl w-1/5 font-normal" placeholder="Ciudad">
            </div>
            @error('ciudad')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="estado">Estado:</label>
                <input type="texto" name="estado" id="estado" class="rounded-xl w-1/5 font-normal" placeholder="Estado">
            </div>
            @error('estado')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            <div class="flex flex-col pb-4">
                <label for="telefono">Telefono:</label>
                <input type="texto" name="telefono" id="telefono" class="rounded-xl w-1/5 font-normal" placeholder="123-456-7890">
            </div>
            @error('telefono')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
        </form>
    </div>

    <script>
        document.getElementById('telefono').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '' + x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
        });
    </script>

@endsection