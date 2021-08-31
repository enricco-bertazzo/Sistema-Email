<?php
session_start();

if(!$_SESSION['EMAIL']) {
    header('location: ../screens/index.php');
    exit();
}

?>

<h2>Olá, <?php echo $_SESSION['EMAIL'];?></h2>
<h2><a href="sair.php"> Sair </a></h2>
