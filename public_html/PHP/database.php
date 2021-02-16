<?php
$host = 'localhost';
$usuario = 'root';
$senhaDatabase = '';
$database = 'cadastro';

$connect = mysqli_connect($host, $usuario, $senhaDatabase, $database);
if (!$connect) {
    die ("connection failed: ". mysqli_connect_error());
}
else {
    $connect;
}



?>