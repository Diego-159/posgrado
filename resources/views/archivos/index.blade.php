@extends('layouts.nav', ['accion' => auth()->user()->programa()])

@section('content')

<div class="flex flex-col justify-center items-center w-full my-8">
    @if(session('success'))
        <p id="success" class="w-full bg-green-300 text-sm text-bold px-8 py-2 text-center">{{ session('success') }}<button id="closeSuccess" class="float-right font-bold text-lg">X</button></p>
@endif

    <h2 class="text-2xl font-extrabold text-center p-4 text-blue-900 rounded-full border-2 border-[#b99e4d] m-4">4. Archivos</h2>
    
    <div class="flex m-4">
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-red-800" href="{{ route('solicitudes.trabajo') }}">Regresar</a>
        <a class="ml-auto mx-8 rounded-2xl py-2 px-4 text-white bg-blue-900" href="{{ route('archivos.solicitud') }}">Generar solicitud</a>
    </div>

    
        <form action="{{ route('archivos.store') }}" method="POST" class="w-[90%] bg-[#b69f5c] rounded-2xl flex flex-col font-bold text-lg p-8">
            @csrf
            <div>
                <label for="solicitud"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="solicitud">Solicitud:</label>
                @if (is_null($documentos) || is_null($documentos->solicitud))
                    <input id="solicitud" name="solicitud"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                        @error('solicitud')
                            <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                        @enderror
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="titulo"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="titulo">Titulo:</label>
                @if (is_null($documentos) || is_null($documentos->titulo))
                    <input id="titulo" name="titulo"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="certificado"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="titulo">Certificado:</label>
                @if (is_null($documentos) || is_null($documentos->certificado))
                    <input id="certificado" name="certificado"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="acta"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="acta">Acta:</label>
                @if (is_null($documentos) || is_null($documentos->acta))
                    <input id="acta" name="acta"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="curp"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="curp">Curp:</label>
                @if (is_null($documentos) || is_null($documentos->curp))
                    <input id="curp" name="curp"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="ine"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="ine">INE:</label>
                @if (is_null($documentos) || is_null($documentos->ine))
                    <input id="ine" name="ine"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
            <div>
                <label for="recomendaciones"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="recomendaciones">3 Recomendaciones:</label>
                @if (is_null($documentos) || is_null($documentos->recomendaciones) || count($documentos->recomendaciones) < 3)
                    <input id="recomendaciones" name="recomendaciones[]"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf" multiple>
                    @error('recomendaciones')
                        <span class="text-red-500 text-sm font-extralight">{{ $message }}</span>
                    @enderror
                @else
                @foreach ($documentos->recomendaciones as $recomendacion)
                <div class="flex felx-col justify-center text-center items-center">
                Recomendación {{ $loop->index + 1 }}
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
            </div>
                @endforeach
                @endif
            </div>
            <div>
                <label for="examen"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
                    for="examen">Examen:</label>
                @if (is_null($documentos) || is_null($documentos->examen))
                    <input id="examen" name="examen"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="application/pdf">
                @else
                <div class="flex space-x-2">
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-green-500" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </a>
                    <a
                        href="#">
                        <svg class="h-8 w-8 text-red-500" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="7" x2="20" y2="7" />
                            <line x1="10" y1="11" x2="10" y2="17" />
                            <line x1="14" y1="11" x2="14" y2="17" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </a>
                </div>
                @endif
            </div>
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