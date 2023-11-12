<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "menu.php";

$part = $_POST['nombre_partido'] ?? '';

$base = "Politicaargentina2";
$Conexion =  mysqli_connect("localhost","root","",$base);

echo '<div style="text-align: center; margin-top: 20px;">';

if ($Conexion) {
    echo "La conexión fue exitosa.<br>";
} else {
    echo "La conexión ha fallado.<br>";
}

// Para borrar
$cadena = "DELETE FROM partidospoliticos WHERE nombre_partido = '$part'";  
$resultado = mysqli_query($Conexion, $cadena);

if ($resultado) {
    echo "Se ha eliminado un registro.<br>";
} else {
    echo "NO se ha eliminado un registro.<br>";
    echo mysqli_error($Conexion);
}

echo '</div>';

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
