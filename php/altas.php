
<html lang="es">

<head>

<link rel="stylesheet" href="../css/menu.css">

</head>

</html>


<?php 

include "menu.php";
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$ca = $_POST['cargo'];
$naci = $_POST['fecha_nacimiento'];
$edu = $_POST['educacion'];
$bio = $_POST['biografia'];
$img = $_FILES["imagen"]["tmp_name"];
$imgTamanio = $_FILES["imagen"]["size"];

// salida de informacion

echo "<h3>".$nom."</h3>".$ape."<h3>". 
"<h3>".$ca."</h3>" "<h3>".$naci."</h3>"."<h3>".$edu."</h3>"."<h3>".$bio."</h3>";

if($img != "none")
{
	$fp = fopen($img,"rb");
	$contenido = fread($fp,$imgTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

$base = "politicaargentina2";
$Conexion =  mysqli_connect("localhost","root","",$base);
var_dump($nombre);

$cadena= "INSERT INTO politicos(nombre, apellido, cargo, fecha_nacimiento, educacion, biografia, imagen)
 VALUES ('$nom','$ape','$ca','$naci','$edu','$bio','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";
	header('Location:../index.php');

}
else{
	print "NO se ha generado un registro"."<br>";
}

}
else{
print "No se puede subir el archivo";
}
 ?>
