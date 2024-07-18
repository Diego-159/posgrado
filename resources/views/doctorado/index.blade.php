@extends('layouts.nav', ['accion' => 'doctorado'])

@section('content')
    <div class="m-8 bg-gray-300 rounded-2xl p-8 shadow-lg shadow-[#b69f5c]">
            <p class="text-xl font-extrabold pb-4 text-center">Requisitos</p>
            <p class="text-sm pb-4">Para ingresar al Doctorado de Ciencias en Ingeniería Eléctrica, se requiere haber obtenido el grado de maestría  en alguna de las ramas de la ingeniería o ciencias físico-matemáticas. Los requisitos de ingresos son los siguientes:</p>
            <ol>
                <li><span class="font-extrabold">1.</span> Tener grado de maestría.</li>
                <li><span class="font-extrabold">2.</span> Presentar solicitud de admisión con curriculum vitae que muestre los logros académicos más relevantes.</li>
                <li><span class="font-extrabold">3.</span> Tres cartas de recomendación académica, las cuales deben provenir de destacados docentes e investigadores, preferentemente miembros de SNI.</li>
                <li><span class="font-extrabold">4.</span> Realizar una entrevista con el Comité de Admisión.</li>
                <li><span class="font-extrabold">5.</span> Presentar una propuesta del proyecto de investigación avalado por un profesor del Núcleo Académico Básico del programa.</li>
                <li><span class="font-extrabold">6.</span> Evidencia del dominio del idioma inglés (oral y escrito), mediante una puntuación mínima de 500 en el examen TOEFL.</li>
                <li><span class="font-extrabold">7.</span> No haber sido dado de baja previamente en otro programa educativo de posgrado. Maestría o Doctorado, por bajo desempeño académico, incumplimiento académico, comportamiento inapropiado o de conducta ética inadecuada.</li>
                <li><span class="font-extrabold">8.</span> Comprobante de examen EXANI III  (Puntuación igual o superior a 1000 puntos).
                Además de los documentos anteriores, es recomendable que los estudiantes presenten el EXANI III, que en su caso, será considerado como elemento adicional de valoración académica.</li>
                <li><span class="font-extrabold">9.</span> Para ex becarios CONACyT, presentar carta de reconocimiento o carta de no adeudo.</li>
            </ol>
        </div>

    <div class="m-8 w-full flex justify-center">
        <a class="bg-green-600 p-4 shadow shadow-slate-700 rounded-2xl text-lg font-extrabold text-white w-48" href="{{ route('solicitudes.index', ['programa' => 'doctorado']) }}" >¡¡Iniciar Proceso!!</a>
    </div>

@endsection