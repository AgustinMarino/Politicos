<html lang="es">

<head>
    <link rel="stylesheet" href="../css/menu.css">
</head>

</html>

<?php 
include "menu.php";
$part = $_POST['nombre_partido'];
$ideo = $_POST['ideologia'];
$an = $_POST['aniofundacion'];
$lid = $_POST['lideractual'];
$sede = $_POST['sedecentral'];
$site = $_POST['sitioweb'];


// Salida de información
echo "<h3>".$part."</h3>".$ideo."<h3>"."</h3>".$an."</h3>"."<h3>".$lid."</h3>"."<h3>".$sede."</h3>"."<h3>".$site."</h3>";

    $base = "politicaargentina2";
    $Conexion =  mysqli_connect("localhost", "root", "", $base);

    $cadena = "INSERT INTO partidospoliticos(nombre_partido, ideologia, aniofundacion, lideractual, sedecentral, sitioweb
    VALUES ('$part','$ideo','$an','$lid','$sede','$site')";

    $resultado = mysqli_query($Conexion, $cadena);

    if ($resultado) {
        print "Se ha insertado un registro"."<br>";
        header('Location:../index.php');
    } else {
        print "NO se ha generado un registro"."<br>";
    }
     else {
    print "No se puede subir el archivo";
}
?>
