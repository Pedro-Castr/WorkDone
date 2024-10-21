<?php
    session_start();
    if ($_POST['codigoVerificacao'] == $_SESSION['codigo']) {
        $_SESSION['msgSucess'] = "Verificado com sucesso";
        header("Location: insertUsuario.php");
    } else {
        $_SESSION['codigoIncorreto'] = True;
        header("Location: ../login.php");
    }
?>
