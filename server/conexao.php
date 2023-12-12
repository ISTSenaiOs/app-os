<?php
// arquivo de conexão com o banco

$mysqli = new mysqli(

    "localhost",
    "root",
    "",
    "app_os");

    

if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}



?>
