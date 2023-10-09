<?php 
include "menu.php";
?>
<html lang="es">
</html>
<?php 
$usu = $_POST['usuario'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo " "."<br>";

}else{
	echo ""."<br>";
}

$cadena = "UPDATE persona SET nombre = '$nom', edad = '$ed' WHERE usuario = '$usu'";

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
	<title>Document</title>
</head>
<body>
	<a href="form-modificacion.php">Volver</a>
	
</body>
</html>