<?php

$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuario(usuario*, emai, senha) values ($usuario, $email, $senha) ";

mysqli_query($con, $sql) or die('Erro:' . mysql_error($con));
?>

