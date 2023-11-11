<?php

include "menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Formulario de Altas</title>
</head>
<body>
<div class="container">
    <h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="altas.php" method="POST" enctype="multipart/form-data">

	    <div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="cargo">Cargo:</label>
		<input type="text" name="cargo"><br>
        </div>

		<div class="grupoInputs">
		<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
		<input type="date" name="nacimiento" class="form-control" required>
	    </div>

		
	    <div class="grupoInputs">
		<label for="educacion">Educacion:</label>
		<input type="text" name="educacion"><br>
		</div>

	    <div class="grupoInputs">
		<label for="biografia">Biografia:</label>
		<input type="text" name="biografia"><br>
		</div>

		<div class="grupoInputs">
		<label for="imagen">Archivo</label>
		<input type="file" name="imagen"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Grabar"><br>
	    </div>
	</form>
</div>
	
	
</body>
</html>