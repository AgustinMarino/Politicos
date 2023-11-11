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
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="modificacion.php" method="POST" >
	<div class="grupoInputs">
		<label for="apellido">apellido:</label>
		<input type="text" name="apellido"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>
		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
	    </div>

		<div class="grupoInputs">
		<label for="cargo">cargo:</label>
		<input type="text" name="cargo"><br>
	    </div>

		<div class="grupoInputs">
		<label for="fecha_nacimiento">fecha de nacimiento:</label>
		<input type="text" name="fecha_nacimiento"><br>
	    </div>

		<div class="grupoInputs">
		<label for="educacion">Educacion:</label>
		<input type="text" name="educacion"><br>
	    </div>
		
		<div class="grupoInputs">
		<label for="biografia">Biografia:</label>
		<input type="text" name="biografia"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>
	</form>
</div>
	
</body>
</html>