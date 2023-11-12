<?php

include "menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	
</head>
<style>
        body {
            margin-top: -24;
        }

        .navbar {
            margin-top: 0;
        }
    </style>
ii
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="modificacion.php" method="POST" >
	<div class="grupoInputs">
		<label for="nombre_partido">Nombre del Partido:</label>
		<input type="text" name="nombre_partido"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>
		
		<div class="grupoInputs">
		<label for="ideologia">Ideologia:</label>
		<input type="text" name="ideologia"><br>
		</div>
		
		<div class="grupoInputs">
   		 <label for="aniofundacion">Año de Fundación:</label>
    		<input type="number" name="aniofundacion" min="1700" max="2099" step="1">
		</div>
		
	    <div class="grupoInputs">
		<label for="lideractual">Lider Actual:</label>
		<input type="text" name="lideractual"><br>
		</div>

	    <div class="grupoInputs">
		<label for="sedecentral">Sede Central:</label>
		<input type="text" name="sedecentral"><br>
		</div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>
	</form>
</div>
	
</body>
</html>