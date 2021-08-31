<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de E-mail</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="text-center">
    <main class="login">
        <form action="login.php" method="POST">
            <i class="fas fa-envelope-open-text login-ico mb-3"></i>
            <div class="form-floating">
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" required autofocus minlength="1" maxlength="32">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="password" name="senha" id="password" placeholder="Senha" required minlength="8" maxlength="16">
                <label for="email">Senha</label>
            </div>
            <button class="btn w-100 btn-primary" type="submit">Entrar</button>
            <?php
            if (isset($_SESSION['erro'])) {
                echo '<div class="alert alert-danger mt-3" role="alert">
                    Usuário ou senha incorreto!
                </div>';
                unset($_SESSION['erro']);
            }
            ?>
            <p class="mt-5 mb-3">Ainda não possui um E-mail? <a href="cadastro.php">Cadastre-se</a></p>
        </form>
    </main>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="../js/style.js"></script>
</body>

</html>
