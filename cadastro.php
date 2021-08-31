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
    <main class="cadastro">
        <form action="" method="POST">
            <i class="fas fa-envelope-open-text cadastro-ico mb-3"></i>
            <div class="form-floating">
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating">
                <input class="form-control cadastro-sem-bord" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="password" name="senha" id="password" placeholder="Senha">
                <label for="email">Senha</label>
            </div>
            <button class="btn w-100 btn-primary" type="submit">Cadastrar-se</button>
            <p class="mt-5 mb-3">Já possui um e-mail? <a href="index.php">Entrar</a></p>
        </form>
    </main>
    <script src="src/js/bootstrap.js"></script>
    <script src="src/js/all.js"></script>
</body>

</html>