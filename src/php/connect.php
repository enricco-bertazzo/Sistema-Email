<?php

define('HOST', '127.0.0.1');
define('EMAIL', 'root');
define('SENHA', '');
define('DB', 'login');

$connect = mysqli_connect(HOST, EMAIL, SENHA, DB) or die ('Não foi possivel acessar');

$usuario = "CREATE TABLE IF NOT EXISTS `login`.`usuario` (
        `id_usuario` INT NOT NULL AUTO_INCREMENT,
        `nome` VARCHAR(16) NOT NULL,
        `sobrenome` VARCHAR(16) NOT NULL,
        `email` VARCHAR(32) NOT NULL,
        `senha` VARCHAR(32) NOT NULL,
        PRIMARY KEY (`id_usuario`),
        UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` ASC) VISIBLE,
        UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)";

$result = mysqli_query($connect, $usuario);

?>
