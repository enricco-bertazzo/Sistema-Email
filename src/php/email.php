<?php

session_start();

include('connect.php');
include('enviar.php');

$sql = "SELECT * FROM emails WHERE email LIKE '$para'";

$resultado_emails = mysqli_query($connect, $sql);

while($rows_emails = mysqli_fetch_array($resultado_emails)){
    echo "Remetente: ".$rows_cursos['remetente'];
    echo "Assunto: ".$rows_cursos['assunto'];
    echo "Mensagem: ".$rows_cursos['mensagem'];
}

?>