<?php
include "menu.php";
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Políticos</title>
    <link rel="stylesheet" href="../css/respuestas.css">
</head>
<style>
    body {
        margin-top: -24;
    }

    .navbar {
        margin-top: 0;
    }
</style>
<body>
    <h3 class="tablatitulo">LISTADO DE LOS REGISTROS DE LA TABLA</h3>

    <table class="tabla">
        <caption class="ttitulo">Lista de Políticos</caption>
        <thead class="ttitulo">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cargo</th>
                <th>Fecha de Nacimiento</th>
                <th>Educación</th>
                <th>Biografía</th>
                <th>Foto</th>
            </tr>
        </thead>

        <?php 
        $base = "Politicaargentina2";
        $Conexion = mysqli_connect("localhost", "root", "", $base);

        if ($Conexion) {
            $cadena = "SELECT * FROM politicos";
            $consulta = mysqli_query($Conexion, $cadena);

            if ($consulta) {
                while ($registro = mysqli_fetch_assoc($consulta)) {
                    echo "<tr class='trmain'>";
                    echo "<th>".(isset($registro['id']) ? $registro['id'] : '')."</th>";
                    echo "<th>".$registro['nombre']."</th>";
                    echo "<th>".$registro['apellido']."</th>";
                    echo "<th>".$registro['cargo']."</th>";
                    echo "<th>".$registro['fecha_nacimiento']."</th>";
                    echo "<th>".$registro['educacion']."</th>";
                    echo "<th>".$registro['biografia']."</th>";
                    echo "<th><img src='imagen.php?id=".(isset($registro['id']) ? $registro['id'] : '')."' width='200px'/></th>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Error en la consulta: ".mysqli_error($Conexion)."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Error de conexión a la base de datos: ".mysqli_connect_error()."</td></tr>";
        }
        ?>
    </table>
</body>
</html>
