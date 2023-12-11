<?php

$base = "Politicaargentina2";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo " "."<br>";

}else{
	echo ""."<br>";
}
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/Politicos/');
}

?>
