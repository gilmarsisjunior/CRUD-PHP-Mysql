<?php 
include_once ('database.php');
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//insere os dados digitados ao banco de dados
$insereItens = "INSERT INTO usuarios (email, login, senha) VALUES ('$email', '$login', MD5('$senha'))";
 
    if (mysqli_query($connect, $insereItens)) {
        echo "Cadastro efetuado com sucesso!";
        echo '<a href= "../login/loga.php"><p> Faça login! </p> </a>'  ;
}
else {
    echo "Erro ao efetuar cadastro, contate o administrador do sistema.";
}

?>