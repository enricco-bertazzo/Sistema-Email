<?php

session_start();

include('connect.php');
$de = $_SESSION['EMAIL'];

$sql = "SELECT * FROM emails WHERE destinatario LIKE '$de'";

$resultado_emails = mysqli_query($connect, $sql);

while($rows_emails = mysqli_fetch_array($resultado_emails)){
    echo "<br>Remetente: ".$rows_emails['remetente'];
    echo "<br>Assunto: ".$rows_emails['assunto'];
    echo "<br>Mensagem: ".$rows_emails['mensagem'];
}

?>