<?php 
    session_start();
    require_once("../lib/Database.php");

    try {
        $db = new Database();

        $usuarios = $db->dbSelect("SELECT * FROM usuario");

        foreach($usuarios as $usuario) {
            if ($_POST['registroEmail'] == $usuario['email']) {
                $_SESSION['msgError'] = "EmailEmUso";
                return header("Location: ../login.php");
            }
        }    

        foreach($usuarios as $usuario){
            if ($_POST['registroNome'] == $usuario['nomeUsuario']) {
                $_SESSION['msgError'] = "nomeEmUso";
                return header("Location: ../login.php");
            } 
        }
    
        foreach($usuarios as $usuario){
            if ($_POST['registroTelefone'] == $usuario['telefone']) {
                $_SESSION['msgError'] = "telefoneEmUso";
                return header("Location: ../login.php");
            } 
        }

            $_SESSION['email']    = $_POST['registroEmail'];
            $_SESSION['senha']    = $_POST['registroSenha'];
            $_SESSION['nome']     = $_POST['registroNome'];
            $_SESSION['telefone'] = $_POST['registroTelefone'];
            $_SESSION['sexo']     = $_POST['registroSexo'];

            unset($_SESSION['msgError']);
            return header("Location: ../codigoEmail.php");

    } catch (Exception $ex) {
        return header("Location: ../login.php?msgError: " . $ex->getMessage());
    }