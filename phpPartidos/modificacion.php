<?php
include "template/cabecera.php";
include "menu.php";
?>
<html lang="es">
</html>
<?php 
$part = $_POST['nombre_partido'];

$ideo = $_POST['ideologia'];
$an = $_POST['aniofundacion'];
$lid = $_POST['lideractual'];
$sede = $_POST['sedecentral'];
$site = $_POST['sitioweb'];




$cadena = "UPDATE partidospoliticos SET ideologia = '$ideo'
, aniofundacion = '$an', lideractual = '$lid' , sedecentral = '$sede', sitioweb = '$ite' 
WHERE nombre_partido = '$part'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo ""."<br>";

}else{
	echo "NO se ha modificado un registro"."<br>";
	echo mysqli_error($Conexion);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mod</title>
</head>
<body>
	<a href="form-modificacion.php">Volver</a>
	
</body>
</html>