
<html lang="es">
</html>


<?php 

include "menu.php";


$nom = $_POST['nombre'];

$base = "politicaargentina2";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}
//para borrar
$cadena= "DELETE FROM politicos  WHERE apellido = '$ape'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha eliminado un registro"."<br>";

}else{
	echo "NO se ha eliminado un registro"."<br>";
	echo mysqli_error($Conexion);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bajas</title>
</head>
<body>
	<a href="form-bajas.php">Volver</a>
</body>
</html>