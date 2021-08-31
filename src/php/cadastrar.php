<?php
session_start();
include("connect.php");

$nome = mysqli_real_escape_string($connect, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($connect, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($connect, trim($_POST['email']));
$senha = mysqli_real_escape_string($connect, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit();
}

$sql = "INSERT INTO usuario (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if($connect->query($sql) === TRUE){
    $_SESSION['estatus_cadastro'] = true;
}

$connect -> close();

header('location: login.php');
exit;
?>
