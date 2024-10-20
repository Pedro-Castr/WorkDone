<?php 
    session_start();
    require_once("../lib/Database.php");

    try {
    $db = new Database();

    $usuarios = $db->dbSelect("SELECT * FROM usuario");

    foreach($usuarios as $usuario) {
        if (password_verify($_POST['senha'], $usuario['senha']) && $_POST['email'] == $usuario['email']) {
            return header("Location: ../index.php");
        }
    }    
        $_SESSION['msgError'] = "LoginIncorreto";
        return header("Location: ../login.php");
    
    } catch (Exception $ex) {
        return header("Location: ../login.php?msgError: " . $ex->getMessage());
    }

