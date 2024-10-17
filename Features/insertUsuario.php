<?php 

session_start();

    require_once("../lib/Database.php");

    $db = new Database();

    $usuarios = $db->dbSelect("SELECT * FROM usuario");

    foreach($usuarios as $usuario){
        if ($_POST['registroEmail'] == $usuario['email']) {
            $_SESSION['msgError'] = "EmailEmUso";
            return header("Location: ../login.php");
        } 
    }

    if ($_POST['registroSenha'] == $_POST['confirmarSenha']) {
        try {
            $result = $db->dbInsert("INSERT INTO usuario (email, senha) VALUES (?, ?)",
            [$_POST['registroEmail'], 
            password_hash(trim($_POST['registroSenha']), PASSWORD_DEFAULT)]);

            if ($result > 0) {
                $_SESSION['msgSucess'] = "Registrado";

            }
        } catch (Exception $e) {
            $_SESSION['msgError'] = "ERROR: " . $e->getMessage();
        }

        return header("Location: ../login.php");
    } else {
        $_SESSION['msgError'] = "SenhasDiferentes";
        return header("Location: ../login.php");
    }
    