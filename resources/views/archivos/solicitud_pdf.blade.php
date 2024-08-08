<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud</title>
    <style>
        td {
            width: 100%;
        }
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
            font-size: 0.9rem;
            padding: 0;
            margin: 0;
            font-weight: lighter;
        }
        .titulo {
            width: 100%;
            background-color: #999999; 
            font-weight: bold;
            font-size: 0.8rem;
            flex:;
        }
        .descripcion {
            font-style: italic;
            font-size: 0.7rem; 
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .fecha{
            width: 100%;
            font-weight: regular;
            font-size: 0.7rem;
            text-align: right;
            padding: 25px;
        }
        .firma{
            width:100%;
            font-weight: regular;
            font-size: 0.9rem;
            text-align: center;
            padding: 100px;
        }
    </style>
</head>
<body>
    <header class="header">
        <table style= "text-align:center;">
            <tr>
                <th style="width=20%">
                <img class="header_container"  src="{{ asset('posgrado/public/imgs/umsnh.png') }}" alt="" width="100">
                </th>
                <th style="width:65%;">
                    <div class="header_container">
                        <h1 class="titulos">UNIVERSIDAD MICHOACANA DE SAN NICOLÁS DE HIDALGO</h1>
                        <h2 class="titulos">DIVISIÓN DE ESTUDIOS DE POSGRADO</h2>
                        <h3 class="titulos">FACULTAD DE INGENIERÍA ELÉCTRICA</h3>
                    </div>
                </th>
                <th style="width=20%">
                    <img class="header_container" src="{{ asset('posgrado/public/imgs/pie.gif') }}" alt="" width="50">
                </th>
            </tr>
        </table>
    </header>
    <div class="descripcion">
    <p class="titulos"><b>SOLICITUD DE ADMISIÓN A LA MAESTRÍA EN CIENCIAS EN</b></p>
    <p class="titulos"><b>INGENIERÍA ELÉCTRICA POR EXAMEN DE CONOCIMIENTOS</b></p><p></p>
    </div>

    <div class="titulo">
        1. DATOS PERSONALES
    </div>
    <p></p>
	<table style="font-size: 0.7rem; font-weight: bold;">
	
    <tr>
        <td colspan="6">Nombre: <span style="text-decoration: underline;">{{ auth()->user()->name }}</span></td>
        @php
            $blob = auth()->user()->datosPersonales()->foto;
            $foto = base64_encode($blob);
        @endphp
	      <td rowspan="4" style="height:100px; border:1px solid black; padding:0; width:10px;"><img style="margin:0;" width="70" height="100" src="data:image/png;base64,{{ $foto }}"/><!--<img class="header_container" src="https://previews.123rf.com/images/yupiramos/yupiramos1607/yupiramos160704520/59600724-perfil-macho-ejecutivo-con-elegante-traje-y-corbata-ilustraci%C3%B3n-vectorial-de-dise%C3%B1o.jpg" alt="" width="100">--></td>
    </tr>
    <tr>
        <td colspan="3" >Fecha de nacimiento: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->fecha_nacimiento }}</span></td>
	      <td colspan="2" >Estado civil: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->estado_civil() }}</span></td>
    </tr>	
    <tr>
	      <td colspan="5" >E-mail: <span style="text-decoration: underline;">{{ auth()->user()->email }}</span></td>
    </tr>
	  <tr>
	      <td colspan="5" >Direccion postal para correspondencia: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->direccion }}</span></td>
	  </tr>
    <tr></tr>  
	  <tr>
	      <td colspan="2" style="height:25px;width:100px">Ciudad: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->ciudad }}</span></td>
	      <td colspan="3" style="width:100px">Estado: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->estado }}</span></td>
	      <td colspan="3" style="width:150px">Teléfono: <span style="text-decoration: underline;">{{ auth()->user()->datosPersonales()->telefono }}</span></td>
	  </tr>
    </table>
    <p></p>
    <div class="titulo">
         2. OPCIÓN DEL PROGRAMA
    </div>
    <p></p>
    <form>
        <table style= "font-size: 0.7rem; font-weight: bold; text-align:center;">
            <tr>
                <td style="height:30px ;width:220px;"><input type="checkbox" name="programa" id="electricos" value="1">  SISTEMAS ELÉCTRICOS</td>
                <td style="width:220px;"><input type="checkbox" name="programa" id="control" value="2">  SISTEMAS DE CONTROL</td>
                <td style="width:220px;"><input type="checkbox" name="programa" id="computacionales" value="2">  SISTEMAS COMPUTACIONALES</td>
            </tr>
        </table>
    </form>
    <p></p>
    <div class="titulo">
        3. ESTUDIOS REALIZADOS
    </div>
    <p></p>
        <table style="font-size: 0.9rem; font-weight: bold;">
            <tr>
                <td colspan="6" style="height:20px; width:20px;">
                    Licenciatura: <span style="text-decoration: underline;">Aqui va la licenciatura que tengamos</span>
                </td>
            </tr>
            <tr>
                <td colspan="6"style="height:20px;  width:20px;">
                    Institución: <span style="text-decoration: underline;">Universidad Michoacana de San Nicolas de Hidalgo</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"style="height:20px;">Fecha de egreso: <span style="text-decoration: underline;">01/01/2001</span></td>
                <td colspan="1"style="text-align:center">Fecha de titulación: <span style="text-decoration: underline;">01/01/2001</span></td>
                <td colspan="3"style="text-align:center">Promedio: <span style="text-decoration: underline;">10.0</span></td>
            </tr>
            <tr>
                <td colspan="6" rowspan="2"style="height:20px;">Otros estudios:
                    <span style="text-decoration: underline;">Tambien nos gusta ver peliculas, comer, echar chisme, y hacer muchas cosas que nos hacen felices jajajajja</span>
                </td>
            </tr>
        </table>
    <p></p>  
    <div class="titulo">
        4. OCUPACIÓN Y DATOS DEL TRABAJO
    </div>
    <p></p>
    <table style="font-size: 0.9rem; font-weight: bold;">
        <tr>
            <td colspan="6" style="height:20px; width:800px;">
                Ocupacón actual: <span style="text-decoration: underline;">Trabajar y mas trabajar</span>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="height:20px;">
                Dirección postal: <span style="text-decoration: underline;">Otra direccion para que?</span>
            </td>
        </tr>
            <tr>
                <td colspan="2" style="height:20px;width:100px">Ciudad: <span style="text-decoration: underline;">Morelia</span></td>
                <td colspan="2" style="width:100px">Estado: <span style="text-decoration: underline;">Michoacán</span></td>
                <td colspan="4" style="width:150px">Teléfono: <span style="text-decoration: underline;">0000000000</span></td>
            </tr>
    </table>
    <p></p>
    <div class="fecha">
        Morelia, Michoacan, a _______ de _________________ de________.   
    </div>
    

    <div class="firma">
        <hr color="#0F53C4">
        Firma
    </div>
</body>
</html>