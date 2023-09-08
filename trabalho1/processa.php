<?php
session_start();
include_once("conection.php");

$name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_PUST, 'email', FILTER_SANITIZE_EMAIL);

$result_username = "INSERT INTO usuarios (name, email, created) VALUES ('$name', '$email', NOW())";
$resulted_username = mysqli_query ($conn, $result_username);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Não foi possível cadastrar o usuário!</p>";
    header("Location: index.php");
}