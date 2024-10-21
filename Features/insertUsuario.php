<?php 

session_start();

    require_once("../lib/Database.php");

    $db = new Database();

    $usuarios = $db->dbSelect("SELECT * FROM usuario");

    try {
        $result = $db->dbInsert("INSERT INTO usuario (email, senha, nomeUsuario, telefone, sexo) VALUES (?, ?, ?, ?, ?)",
        [$_SESSION['email'], 
        password_hash(trim($_SESSION['senha']), PASSWORD_DEFAULT),
        $_SESSION['nome'],
        $_SESSION['telefone'],
        $_SESSION['sexo']]);

        if ($result > 0) {
            session_unset();
            $_SESSION['msgSucess'] = "Registrado";
        }
    } catch (Exception $e) {
        $_SESSION['msgError'] = "ERROR: " . $e->getMessage();
    }

    return header("Location: ../index.php");
    
    