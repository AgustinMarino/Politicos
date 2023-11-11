<?php 
include "menu.php";
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/respuestas.css">
	</head>
	<body>
	<h3 class="tablatitulo">LISTADO DE LOS REGISTRO DE LA TABLA</h3>

	<table class="tabla">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="ttitulo">
			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cargo</th>
			<th>Fecha de Nacimiento</th>
			<th>Educacion</th>
			<th>Biografia</th>
			<th>Foto</th>
			</tr>
		</thead>

		<?php 

		$base = "Politicaargentina2";
		$Conexion =  mysqli_connect("localhost","root","",$base);

		$cadena= "SELECT * FROM politicos ";

		$consulta = mysqli_query($Conexion, $cadena);

		// Verifica si hay resultados antes de intentar acceder a ellos
		if (mysqli_num_rows($consulta) > 0) {
			// Obtiene el primer registro de la tabla
			$registro = mysqli_fetch_row($consulta);
		
			echo "<tr class='trmain'>";
			echo "<th>".$registro[0]."</th><th>".$registro[1]."</th><th>".$registro[2]."</th><th>".$registro[3]."</th><th>".$registro[4]."</th><th>".$registro[5]."</th><th>".$registro[6]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[7])."' width='200px'/></th>";
			echo "</tr>";
		
			// Muestra el resto de los registros de la tabla
			while ($registro = mysqli_fetch_row($consulta)) {
				echo "<tr class='trmain'>";
				echo "<th>".$registro[0]."</th><th>".$registro[1]."</th><th>".$registro[2]."</th><th>".$registro[3]."</th><th>".$registro[4]."</th><th>".$registro[5]."</th><th>".$registro[6]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[7])."' width='200px'/></th>";
				echo "</tr>";
			}
		} else {
			// No hay resultados
			echo "<tr><td colspan='8'>No hay registros en la tabla.</td></tr>";
		}
		