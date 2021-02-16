<?php 
require_once('database.php');



$login = $_POST['login'];
$senha = $_POST['senha'];
// checa se existe um usuário cadastrado no banco de dados
$hash = "SELECT * FROM usuarios where login = '$login' ";
$teste = mysqli_query($connect, $hash);
$fetch = mysqli_fetch_row ($teste);

$chave = $fetch['3'];

$autenticaSenha = password_verify($senha , $chave);

if($autenticaSenha) {
    echo "Usuário autênticado!";
}
else echo "Credênciais inválidas, tente novamente";








?>
