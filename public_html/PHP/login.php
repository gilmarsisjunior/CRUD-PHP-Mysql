<?php 
require_once('database.php');


$login = $_POST['login'];
$senha = $_POST['senha'];

$checar = "SELECT login FROM usuarios WHERE login = '$login' ";

$autenticacao = mysqli_query($connect, $checar);

if ($autenticacao){
    echo "usuário encontrado";
}
else {
    echo "usuario não encontrado";
}

?>
