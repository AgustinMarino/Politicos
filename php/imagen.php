<?php
$base = "Politicaargentina2";
$Conexion = mysqli_connect("localhost", "root", "", $base);

if ($Conexion) {
    $id = $_GET['id'];
    $consulta = mysqli_query($Conexion, "SELECT foto FROM politicos WHERE id = $id");

    if ($consulta) {
        $registro = mysqli_fetch_assoc($consulta);
        header('Content-Type: image/jpeg');
        ob_clean(); // Limpiar el búfer de salida
        echo $registro['foto'];
    } else {
        echo "Error en la consulta: " . mysqli_error($Conexion);
    }
} else {
    echo "Error de conexión a la base de datos: " . mysqli_connect_error();
}
?>
