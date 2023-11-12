<?php
include "menu.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
</head>
<style>
        body {
            margin-top: -24;
        }

        .navbar {
            margin-top: 0;
        }
    </style>

<body>

<div class="container">
	<h3 class="altaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="altaInput" action="bajas.php" method="POST">
	    <div class="grupoInputs">
		<label for="nombre_partido">Nombre del Partido:</label>
        <input type="text" name="nombre_partido"><br>	
        </div>
		
		<div class="btn-submit">
		<input type="submit" value="Eliminar"><br>
        </div>
	</form>
</div>
	
</body>
</html>
