@extends('layouts.nav', ['accion' => $programa])

@section('content')
<div class="flex flex-col justify-center items-center w-full my-8">
<h2 class="text-2xl font-extrabold text-center p-4 text-blue-900 rounded-full border-2 border-[#b69f5c] m-4"> 1. Datos Personales</h2>

        <div class="flex m-4">
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-red-800" href="{{ route($programa.'.index') }}">Regresar</a>
        @if(auth()->user()->personales())
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-blue-900" href="{{ route('solicitudes.estudios', ['programa' => $programa]) }}">Siguiente</a>
        @endif
        </div>
        
        <form action="{{ is_null($personales) ? route('solicitudes.personales.store', ['programa' => $programa]) : route('solicitudes.personales.update', ['programa' => $programa]) }}" method="POST" class="w-[90%] bg-[#b69f5c] rounded-2xl flex flex-col font-bold text-lg p-8" enctype="multipart/form-data">
            @csrf
            @if($programa === 'maestria')
            <div class="flex flex-col pb-4">
                <label for="mecanismo">Escoge un Mecanismo</label>
                <select name="mecanismo" id="mecanismo" class="rounded-xl w-1/5 font-normal px-4 py-2" required>
                    <option value="" selected hidden>Selecciona un mecanismo</option>
                    <option value="1" {{ !is_null(auth()->user()->mecanismo()) ? auth()->user()->mecanismo() == 1 ? 'selected' : '' : ''}}>Examen de admisión</option>
                    <option value="2" {{ !is_null(auth()->user()->mecanismo()) ? auth()->user()->mecanismo() == 2  ? 'selected' : '' : ''}}>Curso propedéutico</option>
                    <option value="3" {{ !is_null(auth()->user()->mecanismo()) ? auth()->user()->mecanismo() == 3 ? 'selected' : '' : ''}}>Ingreso por promedio</option>
                </select>
                @error('mecanismo')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            @endif
            <div class="flex flex-col pb-4">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ auth()->user()->name }}" class="rounded-xl w-1/2 font-normal px-4 py-2">
                @error('nombre')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="fecha_nac">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="rounded-xl w-1/6 font-normal px-4 py-2" value="{{ is_null($personales) ? '2000-01-01' : $personales->fecha_nacimiento}}">
                @error('fecha_nacimiento')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="estado_civil">Estado civil:</label>
                <select name="estado_civil" id="estado_civil" class="rounded-xl w-1/5 font-normal px-4 py-2">
                    <option value="" selected hidden>Seleccione una opción</option>
                    <option value="1" {{ !is_null($personales) ? $personales->estado_civil == 1 ? 'selected' : '' : '' }}>Soltero</option>
                    <option value="2" {{ !is_null($personales) ? $personales->estado_civil == 2 ? 'selected' : '' : '' }}>Casado</option>
                    <option value="3" {{ !is_null($personales) ? $personales->estado_civil == 3 ? 'selected' : '' : '' }}>Divorciado</option>
                    <option value="4" {{ !is_null($personales) ? $personales->estado_civil == 4 ? 'selected' : '' : '' }}>Viudo</option>
               </select>
               @error('estado_civil')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="ejemplo@correo.com" value="{{ auth()->user()->email }}" class="rounded-xl w-1/2 font-normal px-4 py-2">
                @error('email')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="direccion">Dirección postal para correspondencia:</label>
                <input type="text" name="direccion" id="direccion" class="rounded-xl w-11/12 font-normal px-4 py-2" placeholder="Nombre Calle #123, Nombre Colonia, C.P.12345" value="{{ is_null($personales) ? '' : $personales->direccion }}">
                @error('direccion')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="rounded-xl w-1/5 font-normal px-4 py-2" placeholder="Ciudad" value="{{ is_null($personales) ? '' : $personales->ciudad }}">
                @error('ciudad')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" class="rounded-xl w-1/5 font-normal px-4 py-2" placeholder="Estado" value="{{ is_null($personales) ? '' : $personales->estado }}">
                @error('estado')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" class="rounded-xl w-1/5 font-normal px-4 py-2" placeholder="123-456-7890" value="{{ is_null($personales) ? '' : $personales->telefono }}">
                @error('telefono')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col pb-4">
                <input id="foto" name="foto"
                class="float-left block w-1/2 text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                type="file" accept="image/*">
                @error('foto')
                    <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex px-4">
                <button type="submit" class="ml-auto rounded-2xl py-2 px-4 text-white bg-[#013281] hover:bg-[#b69f5c]">Enviar</button>
            </div>
        </form>
    </div>

    <script>
        let foto = document.getElementById('foto');
        document.getElementById('telefono').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '' + x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
        });
        foto.addEventListener('change', function() {
            var file = foto.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById('foto').style.display = 'none';
                var img = document.createElement('img');
                img.src = reader.result;
                img.style.width = '100px';
                img.style.height = '100px';
                document.getElementById('foto').parentNode.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
</script>

@endsection