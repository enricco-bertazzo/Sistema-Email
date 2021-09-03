<?php
session_start();
include("connect.php");

$de = $_SESSION['EMAIL'];
$para = mysqli_real_escape_string($connect, trim($_POST['para']));
$assunto = mysqli_real_escape_string($connect, trim($_POST['assunto']));
$mensagem = mysqli_real_escape_string($connect, trim(($_POST['mensagem'])));

$sql = "select count(*) as total from usuario where email = '$para'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 0){
    $_SESSION['usuario_nao_existe'] = true;
    header('location: ../screens/enviar.php');
    exit();
}

$sql = "INSERT INTO emails (remetente, destinatario, assunto, mensagem) VALUES ('$de', '$para', '$assunto', '$mensagem')";

$result = mysqli_query($connect, $sql);
$_SESSION['email_enviado'] = true;
header('location: ../screens/enviados.php');

// OBS: Não conseguimos fazer funcionar com a utilização de socket, e para não ficar sem entregar
//      deixamos o codigo php que fizemos no inicio para montar o sistema de e-mail.

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