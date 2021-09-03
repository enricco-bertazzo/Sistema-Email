<?php

include('connect.php');
$de = $_SESSION['EMAIL'];

$sql = "SELECT * FROM emails WHERE remetente LIKE '$de'";

$resultado_emails = mysqli_query($connect, $sql);

while($rows_emails = mysqli_fetch_array($resultado_emails)){
    echo "
    <tr>
        <td>
            <div class='icheck-primary'>
                <input type='checkbox' value='' id='check2'>
                <label for='check2'></label>
            </div>
        </td>
        <td class='mailbox-name'><p>Destinatario: </p>".$rows_emails['destinatario']."</a></td>
        <td class='mailbox-name'><p>Assunto: </p>".$rows_emails['assunto']."</a></td>
        <td class='mailbox-subject'><b><p>Mensagem: </p>".$rows_emails['mensagem']."</b></td>
    </tr>";
}

?>