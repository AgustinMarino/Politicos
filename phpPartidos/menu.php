<?php
include "../php/cabecera.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu general de Politicos</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
    <div class="header text-center"> <!-- Añade la clase text-center para centrar el contenido -->
        <h3 class="titulo">ABM Partidos</h3>

        <div class="menu">       
            <a href="form-altas.php">Alta</a><br>
            <a href="form-bajas.php">Bajas</a><br>
            <a href="form-modificacion.php">Modificaciones</a><br>
            <a href="listar.php">Listado de politicos</a><br>
        </div>
    </div>
</body>
</html>

<style>
a{
    color: rgb(0,0,0);
    border-radius: 5px;
    


}
a:hover {
    background-color: 773ebc; /* Violeta suave */
    padding:2px;
    border: 2cm;
    border-radius: 5px;    
    color: rgb(255, 255, 255);
}
</style>
