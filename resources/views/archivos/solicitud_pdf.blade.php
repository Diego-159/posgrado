<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
    <style>
        .header {
            display: flex;
            flex-direction: row;
            width: 100%;
        }
        .header_container {
            flex: 1;
            padding: 10px;
            text-align: center;
        }
        .titulos {
            font-size: 1em;
            padding: 0;
            margin: 0;
            font-weight: lighter;
        }
        .titulo {
            width: 100%;
            background-color: #999999; 
            font-weight: bold;
            font-size: 0.8em;
        }
        .descripcion {
            width: 100%;
            font-style: italic;
            font-size: 0.8em; 
            text-align: center;
        }
        .informacion {
            width: 100%;
            font-weight: bold;
            font-size: 0.7em; 
        }
    </style>
</head>
<body>
    <header class="header">
        <table>
            <tr>
                <td>
                    <img class="header_container"  src="{{ asset('posgrado/public/imgs/umsnh.png') }}" alt="" width="100">
                </td>
                <td>
                    <div class="header_container">
                        <h1 class="titulos">UNIVERSIDAD MICHOACANA DE SAN NICOLÁS DE HIDALGO</h1>
                        <h2 class="titulos">DIVISIÓN DE ESTUDIOS DE POSGRADO</h2>
                        <h3 class="titulos">FACULTAD DE INGENIERÍA ELÉCTRICA</h3>
                    </div>
                </td>
                <td>
                    <img class="header_container" src="{{ asset('posgrado/public/imgs/pie.gif') }}" alt="" width="50">
                </td>
            </tr>
        </table>
    </header>
    <div class="descripcion">
    <p class="titulos">SOLICITUD DE ADMISIÓN A LA MAESTRÍA EN CIENCIAS EN</p>
    <p class="titulos">INGENIERÍA ELÉCTRICA POR EXAMEN DE CONOCIMIENTOS</p>
    </div>

    <div class="titulo">
        1. DATOS PERSONALES
    </div>
    <div class="informacion">
       <p> Nombre: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Fecha de nacimiento: <span style="text-decoration: underline;">01/01/2001 </span>Estado civil: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> E-mail: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Direccion postal para correspondencia: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Ciudad: <span style="text-decoration: underline;">Ejemplo</span>Estado: <span style="text-decoration: underline;">Ejemplo</span>Teléfono: <span style="text-decoration: underline;">Ejemplo</span></p>
    </div>
    <div class="titulo">
        2. OPCIÓN DEL PROGRAMA
    </div>

    <div class="informacion">
        <table>
            <tr>
                <td>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
  <path fill=blue d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
</svg>SISTEMAS ELÉCTRICOS</td>
                <td>SISTEMAS DE CONTROL</td>
                <td>SISTEMAS COMPUTACIONALES</td>
            </tr>
        </table>
    </div>
    <div class="titulo">
        3. ESTUDIOS REALIZADOS
    </div>
    <div class="informacion">
       <p> Licenciatura: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Institución: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Fecha de egreso: <span style="text-decoration: underline;">01/01/2001</span> Fechas de titulación:<span style="text-decoration: underline;">01/01/2001</span>Promedio: <span style="text-decoration: underline;">0</span></p>
       <p> Otros estudios: <span style="text-decoration: underline;">Ejemplo</span> </p>
    </div>

    <div class="titulo">
        4. OCUPACIÓN Y DATOS DEL TRABAJO
    </div>
    <div class="informacion">
       <p> Ocupacón actual: <span style="text-decoration: underline;">Ejemplo</span></p>
       <p> Dirección postal: <span style="text-decoration: underline;">Ejemplo</span> </p>
       <p> Ciudad: <span style="text-decoration: underline;">Ejemplo</span>Estado: <span style="text-decoration: underline;">Ejemplo</span> Teléfono: <span style="text-decoration: underline;">Ejemplo</span></p>
    </div>
</body>
</html>