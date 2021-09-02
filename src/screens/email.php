<?php include('../php/verificar.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa de entrada - Sistema de E-mail</title>
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
                                    <a href="enviar.php" class="btn btn-primary btn-block">+</a>
                                    <a class="no-style-link text-black">
                                        <i class="fas fa-inbox"></i> Caixa de entrada
                                    </a>
                                    <a href="enviados.php" class="no-style-link">
                                        <i class="far fa-envelope"></i> Enviados
                                    </a>
                                </p>
                            </div>
                            <div class="card-body p-0">
                                <div class="mailbox-controls">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </div>
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check1">
                                                        <label for="check1"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this
                                                    problem...
                                                </td>
                                                <td class="mailbox-date">5 mins ago</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check2">
                                                        <label for="check2"></label>
                                                    </div>
                                                </td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this
                                                    problem...
                                                </td>
                                                <td class="mailbox-date">28 mins ago</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="mailbox-controls">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
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
