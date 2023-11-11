<?php
include "template/cabecera.php";
include "menu.php";
?>
<html lang="es">
</html>
<?php 
$nom = $_POST['nombre'];
$ape = $_POST['nombre'];
$ca = $_POST ['cargo'];
$naci = $_POST ['fecha_nacimiento'];
$edu = $_POST ['educacion'];
$bio = $_POST ['biografia'];
$ed = $_POST['edad'];

$base = "Politicaargentina2";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo " "."<br>";

}else{
	echo ""."<br>";
}

$cadena = "UPDATE politicos SET nombre = '$nom', cargo = '$ca', fecha_nacimiento = '$naci'
, educacion = '$edu' , biografia = '$bio' WHERE apellido = '$ape'";

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