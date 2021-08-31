<?php

session_start();
session_destroy();
header('location: ../screens/index.php');
exit();

?>
