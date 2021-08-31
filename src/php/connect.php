<?php
define('HOST', '127.0.0.1');
define('EMAIL', 'root');
define('SENHA', '');
define('DB', 'login');

$connect = mysqli_connect(HOST, EMAIL, SENHA, DB) or die ('Não foi possivel acessar');

?>