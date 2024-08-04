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
            flex:;
        }
        .descripcion {
            width: 100%;
            font-style: italic;
            font-size: 0.85em; 
            text-align: center;
            padding: 10px;
        }
        .fecha{
            width: 100%;
            font-weight: regular;
            font-size: 0.7em;
            text-align: right;
            padding: 15px;
        }
        .firma{
            width:100%;
            font-weight: regular;
            font-size: 0.9em;
            text-align: center;
            padding: 100px;
        }
    </style>
</head>
<body>
    <header class="header">
        <table align="center" style= "text-align:center;">
            <tr>
                <td style="width:100px">
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
    <p class="titulos"><b>SOLICITUD DE ADMISIÓN A LA MAESTRÍA EN CIENCIAS EN</b></p>
    <p class="titulos"><b>INGENIERÍA ELÉCTRICA POR EXAMEN DE CONOCIMIENTOS</b></p>
    </div>

    <div class="titulo">
        1. DATOS PERSONALES
    </div>
	<table style="font-size: 0.7em; font-weight: bold;">
	
    <tr>
        <td colspan="6">Nombre: <span style="text-decoration: underline;">Lizbeth Guadalupe Ambris Bedolla</span></td>
	      <td rowspan="4" ><center><img class="header_container" src="https://previews.123rf.com/images/yupiramos/yupiramos1607/yupiramos160704520/59600724-perfil-macho-ejecutivo-con-elegante-traje-y-corbata-ilustraci%C3%B3n-vectorial-de-dise%C3%B1o.jpg" alt="" width="100" border="1" style="padding:px;"></center></td>
    </tr>
    <tr>
        <td colspan="3">Fecha de nacimiento: <span style="text-decoration: underline;">01/01/2001 </span></td>
	      <td colspan="2">Estado civil: <span style="text-decoration: underline;">Casado</span></td>
    </tr>	
    <tr>
	      <td colspan="5">E-mail: <span style="text-decoration: underline;">Ejemplo@ejemplo.com</span></td>
    </tr>
	  <tr>
	      <td colspan="5">Direccion postal para correspondencia: <span style="text-decoration: underline;">Museo del Virreynato 153, Col Adolfo Lopez Mateos, 58180. Morelia, Michoacán mas direccion para que se vea mas choncho este campo</span></td>
	  </tr>
    <tr></tr>  
	  <tr>
	      <td colspan="2"style="height:20px;width:100px">Ciudad: <span style="text-decoration: underline;">Morelia</span></td>
	      <td colspan="3" style="width:100px">Estado: <span style="text-decoration: underline;">Michoacán</span></td>
	      <td colspan="3"style="width:150px">Teléfono: <span style="text-decoration: underline;">0000000000</span></td>
	  </tr>
    </table>
    
    <div class="titulo">
         2. OPCIÓN DEL PROGRAMA
    </div>

    <div class="informacion">
        <table align="center" style= "font-size: 0.9em; font-weight: bold; text-align:center;">
            
            <tr>
                <td style="height:30px ;width:220px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
  <path fill="blue" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
</svg>SISTEMAS ELÉCTRICOS</td>
                <td style="width:220px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" fill="currentColor" class="bi bi-file-check" viewBox="0 0 16 16">
  <path fill='blue' d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
</svg>SISTEMAS DE CONTROL</td>
                <td style="width:220px;" ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
  <path fill='blue' d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
</svg>SISTEMAS COMPUTACIONALES</td>
            </tr>
        </table>
    </div>

    <div class="titulo">
        3. ESTUDIOS REALIZADOS
    </div>
        <table style="font-size: 0.7em; font-weight: bold;">
            <tr>
                <td colspan="6" style="height:20px; width:800px;">
                    Licenciatura: <span style="text-decoration: underline;">Aqui va la licenciatura que tengamos</span>
                </td>
            </tr>
            <tr>
                <td colspan="6"style="height:20px;">
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
        
    <div class="titulo">
        4. OCUPACIÓN Y DATOS DEL TRABAJO
    </div>
    <table style="font-size: 0.7em; font-weight: bold;">
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
                <td colspan="3" style="width:100px">Estado: <span style="text-decoration: underline;">Michoacán</span></td>
                <td colspan="3" style="width:150px">Teléfono: <span style="text-decoration: underline;">0000000000</span></td>
            </tr>
    </table>
    <div class="fecha">
        Morelia, Michoacan, a _______ de _________________ de________.   
    </div>
    <div class="firma">
        Firma
    </div>
</body>
</html>