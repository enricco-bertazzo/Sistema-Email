<?php

session_start();

include('connect.php');

    if(empty($_POST['email']) || empty($_POST['senha'])){
        header("location: ../screens/index.php");
        exit();
    }

?>