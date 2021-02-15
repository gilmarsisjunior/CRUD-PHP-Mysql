<?php 
session_start();
require_once('database.php');


$login = $_POST['login'];
$senha = $_POST['senha'];

// checa se existe um usuário cadastrado no banco de dados
$checar = "SELECT login, senha FROM usuarios WHERE login = '$login' AND senha = MD5('$senha') ";
            $autenticacao = mysqli_query($connect, $checar);

                    if (mysqli_num_rows($autenticacao) > 0){
                        echo "usuário encontrado";
                    }
                    else {
                        echo "usuario não encontrado";
}

?>
