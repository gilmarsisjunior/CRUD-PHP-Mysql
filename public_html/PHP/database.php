<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'cadastro';

$connect = mysqli_connect($host, $usuario, $senha, $database);
if (!$connect) {
    die ("connection failed: ". mysqli_connect_error());
}
else {
    $connect;
}



?>