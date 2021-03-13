<?php

$host = "localhost";
$user = "root";
$pass = "";
$DB = "tectop";
$tb1 = "usuarios";
$tb2 = "acer";
$tb3 = "dell";
$tb4 = "iphone";
$tb5 = "lenovo";
$tb6 = "samsung";
$tb7 = "xiaomi";
$conexion = new Mysqli($host, $user, $pass, $DB) or die("Error de conexión");

error_reporting(0);

if ($conexion->connect_errno) {
    echo "Lo sentimos, hubo un error al conectarse";
    
}

?>