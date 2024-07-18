@extends('layouts.nav', ['accion' => 'editar_usuario'])

@section('content')
    <div>
        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            <div class="mt-16">
                <form class="max-w-sm mx-auto" action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Escriba su nombre" required />
                    </div>
                    <div class="mb-5">
                        <label for="pais" class="block mb-2 text-sm font-medium text-gray-900">País:</label>
                        <select id="pais" name="pais" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected disabled>Selecciona una opción</option>
                            @foreach ($paises as $pais)
                                <option value="{{ $pais->id }}" {{ $user->id_pais === $pais->id ? 'selected' : '' }}>
                                    {{ $pais->pais }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Correo:</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Escriba su correo" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña:</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                             />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar</button>
                </form>
            </div>
    </div>
@endsection