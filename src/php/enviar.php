<?php
session_start();
include("connect.php");

$nome = mysqli_real_escape_string($connect, trim($_POST['de']));
$sobrenome = mysqli_real_escape_string($connect, trim($_POST['para']));
$email = mysqli_real_escape_string($connect, trim($_POST['assunto']));
$senha = mysqli_real_escape_string($connect, trim(md5($_POST['mensagem'])));