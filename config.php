<?php

include_once("conexao.php");

$nome =filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email =filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$resu= "INSERT INTO tabela (nome, email) VALUE ('$nome', '$email')";
$resultado = mysqli_query($conn, $resu);

if(mysqli_insert_id($conn)){
    header("Location: acessar.html");
    
}else{
    header("Location: erro.php");
}
?>
