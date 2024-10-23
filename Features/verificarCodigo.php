<?php
session_start();
$codigoInserido = str_replace(' ', '', $_POST['codigoVerificacao']);

if ($codigoInserido == $_SESSION['codigo']) {
    $_SESSION['msgSucess'] = "Verificado com sucesso";
    header("Location: insertUsuario.php");
} else {
    $_SESSION['codigoIncorreto'] = "codigoInvalido";
    header("Location: ../login.php");
}
?>
