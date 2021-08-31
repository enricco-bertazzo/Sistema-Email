<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de E-mail</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body class="text-center">
    <main class="login">
        <form action="">
            <i class="fas fa-envelope-open-text login-ico mb-3"></i>
            <div class="form-floating">
                <input class="form-control" type="email" name="" id="email" placeholder="E-mail">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="password" name="" id="password" placeholder="Senha">
                <label for="email">Senha</label>
            </div>
            <button class="btn w-100 btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3">Ainda não possui um E-mail? <a href="http://">Cadastre-se</a></p>
        </form>
    </main>
    <script src="src/js/bootstrap.js"></script>
    <script src="src/js/all.js"></script>
</body>

</html>