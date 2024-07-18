<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FIE|Posgrado</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!--<link href="./resources/css/app2.css" rel="stylesheet">-->

    @env('production')
    <script src="{{ asset('build/assets/app2.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    @endenv
    @env('local')
    @vite(['resources/css/app2.css', 'resources/js/app.js'])
    @endenv
    @stack('stack-header')
</head>

<body>
    <nav
        class="bg-gradient-to-r from-[#2971b2] to-[#00368d] dark:bg-blue-600 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('posgrado/public/imgs/pie.gif') }}" class="h-20 w-20" alt="Posgrado FIE">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">POSGRADO FIE</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" id="userListOptions" onclick="dropListOptionsUser()"
                    class="text-white items-center bg-[#013281] hover:bg-[#2971b2] focus:ring-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-4 py-2 text-center"><svg
                        class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="listaOpciones"
                    class="z-10 hidden transform translate-y-24 -translate-x-32 font-normal bg-[#013281] divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-white" >
                        <li>
                            <a href="{{ route('user.edit', ['id' => auth()->user()->id]) }}"
                                class="block px-4 py-2 hover:bg-[#b69f5c]">Datos
                                personales</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="{{ route('user.exit') }}"
                            class="block px-4 py-2 text-sm text-white hover:bg-red-500">Cerrar
                            sesión</a>
                    </div>
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}" id="inicio"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ route('maestria.index') }}" id="maestria"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Maestría</a>
                    </li>
                    <li>
                        <a href="{{ route('doctorado.index') }}" id="doctorado"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Doctorado</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="h-2 bg-[#b69f5c]"></div>


    <main class="w-full min-h-full overflow-y-scroll">
        @yield('content')
    </main>

    <footer class="bg-black text-white w-full text-center text-2xl font-extrabold bottom-0">
        Este es el footer
    </footer>
</body>

<script defeat>
    var accion = '{{ $accion }}';
    var opList = false;
    if (accion !== 'editar_usuario') {
        var opcion = document.getElementById(accion);
        opcion.classList.remove('text-gray-900');
        opcion.classList.remove('hover:bg-gray-100');
        opcion.classList.remove('dark:text-white');
        opcion.classList.remove('dark:hover:bg-gray-700');
        opcion.classList.remove('dark:hover:text-white');
        opcion.classList.remove('dark:border-gray-700');
        opcion.classList.remove('md:dark:hover:bg-transparent');
        opcion.classList.add('text-white');
        opcion.classList.add('text-2xl');
        opcion.classList.add('font-bold');
    }

    function dropListOptionsUser() {
        opList = !opList;
        var listaOpciones = document.getElementById('listaOpciones');
        if (opList) {
            listaOpciones.classList.remove('hidden');
        } else {
            listaOpciones.classList.add('hidden');
        }
    }
</script>

</html>