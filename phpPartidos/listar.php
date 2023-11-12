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
        <caption class="ttitulo">Lista de Politicos</caption>
        <thead class="ttitulo">
            <tr>
                <th>Id del partido</th>
                <th>Nombre del partido</th>
                <th>Ideologia</th>
                <th>Año de fundacion</th>
                <th>Lider actual</th>
                <th>Sede central</th>
                <th>Sitio web</th>
            </tr>
        </thead>

        <?php 
        $base = "Politicaargentina2";
        $Conexion = mysqli_connect("localhost", "root", "", $base);

        if ($Conexion) {
            $cadena = "SELECT * FROM partidospoliticos";
            $consulta = mysqli_query($Conexion, $cadena);

            if ($consulta) {
                while ($registro = mysqli_fetch_row($consulta)) {
                    echo "<tr class='trmain'>";
                    echo "<th>".$registro[0]."</th><th>".$registro[1]."</th><th>".$registro[2]."</th><th>".$registro[3]."</th><th>".$registro[4]."</th><th>".$registro[5]."</th><th>".$registro[6]."</th></th>";
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
