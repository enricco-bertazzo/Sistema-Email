<?php
session_start();
include("connect.php");

$de = $_SESSION['EMAIL'];
$para = mysqli_real_escape_string($connect, trim($_POST['para']));
$assunto = mysqli_real_escape_string($connect, trim($_POST['assunto']));
$mensagem = mysqli_real_escape_string($connect, trim(($_POST['mensagem'])));

$sql = "INSERT INTO emails (remetente, destinatario, assunto, mensagem) VALUES ('$de', '$para', '$assunto', '$mensagem')";

$result = mysqli_query($connect, $sql);
$_SESSION['email_enviado'] = true;
header('location: ../screens/enviados.php');

// OBS: Não conseguimos fazer funcionar com a utilização de socket.

// $host = "127.0.0.1";
// $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
// $porta = 3000;

// if(socket_connect($socket, $host, $porta)){
//     $de = 'test';
//     $para = $_POST['para'];
//     $assunto = $_POST['assunto'];
//     $mensagem = $_POST['mensagem'];
//     $sql = "INSERT INTO emails (remetente, destinatario, assunto, mensagem) VALUES ('$de', '$para', '$assunto', '$mensagem')";
//     socket_write($socket,$sql,strlen($sql));
// }

// socket_close($socket);

// if($connect->query($sql) === TRUE){
//     $_SESSION['estatus_cadastro'] = true;
// }

// $connect -> close();

// header('location: ../screens/email.php');
// exit;

?>