<?php

session_start();

include('connect.php');

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "select id_usuario, email from usuario where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['EMAIL'] = $email;
    header('location: ../screens/email.php');
    exit();
    
} else {
    $_SESSION['erro'] = true;
    header('location: ../screens/index.php');
    exit();
}
?>
