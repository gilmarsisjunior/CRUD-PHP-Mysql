<?php 
include_once ('database.php');
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$insereItens = "INSERT INTO usuarios (email, login, senha) VALUES ('$email', '$login', '$senha')";
 
    if (mysqli_query($connect, $insereItens)) {
        echo "New record created successfully";   
}
else {
    echo "error";
}

?>