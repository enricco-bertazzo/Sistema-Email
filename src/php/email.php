<?php

include('connect.php');
$de = $_SESSION['EMAIL'];

$sql = "SELECT * FROM emails WHERE destinatario LIKE '$de'";

$resultado_emails = mysqli_query($connect, $sql);

while($rows_emails = mysqli_fetch_array($resultado_emails)){
    echo "
    <tr>
        <td class='mailbox-name'><p>Remetente: </p>".$rows_emails['remetente']."</a></td>
        <td class='mailbox-name'><p>Assunto: </p>".$rows_emails['assunto']."</a></td>
        <td class='mailbox-subject'><b><p>Mensagem: </p>".$rows_emails['mensagem']."</b></td>
    </tr>";
}

?>