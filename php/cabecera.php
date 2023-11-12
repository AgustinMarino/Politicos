<?php
include 'config/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politica Argentina</title>
    <link rel="stylesheet" href="php/assets/css/bootstrap.min.css">
    <style>
        body {
            margin-top: -24;
        }

        .navbar {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <a class="nav-link" href="<?= BASE_URL ?>index.php">Inicio</a>
            <a class="nav-link" href="<?= BASE_URL ?>politicaargentina.php">Politica Argentina</a>
        </ul>
    </nav>
</body>
</html>
