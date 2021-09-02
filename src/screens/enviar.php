<?php session_start() ?>

<?php if(!(isset($_SESSION['EMAIL']))) {
    include('../php/verificar.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar - Sistema de E-mail</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="">
    <main class="">
        <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <i class="fas fa-envelope-open-text email-ico mb-3"></i>
                    <li class="nav-item nav-link link-dark px-2">MailBOX</li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="../php/sair.php" class="nav-link link-dark px-2">Sair</a></li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <section class="content">
                <div class="emails">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <p class="mt-3">
                                    <a href="enviar.php" class="btn btn-primary btn-block">Enviar e-mail</a>
                                    <a href="email.php" class="no-style-link">
                                        <i class="fas fa-inbox"></i> Caixa de entrada
                                    </a>
                                    <a href="enviados.php" class="no-style-link">
                                        <i class="far fa-envelope"></i> Enviados
                                    </a>
                                </p>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-controls">
                                </div>
                                <div class="table-responsive mailbox-messages emails">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <div class="form-floating">
                                                <label for="para">Para:</label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Para:</span>
                                                </div>
                                                <input class="form-control" type="text" name="para" id="para" placeholder="" required autofocus minlength="1" maxlength="32">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Assunto:</span>
                                                </div>
                                                <input class="form-control" type="text" name="assunto" id="assunto" placeholder="" required autofocus minlength="1" maxlength="32">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">Mensagem:</span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="mailbox-controls">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="../js/style.js"></script>
</body>

</html>