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


    try {
        $result = $db->dbInsert("INSERT INTO usuario (email, senha, nomeUsuario, telefone, sexo) VALUES (?, ?, ?, ?, ?)",
        [$_POST['registroEmail'], 
        password_hash(trim($_POST['registroSenha']), PASSWORD_DEFAULT),
        $_POST['registroNome'],
        $_POST['registroTelefone'],
        $_POST['registroSexo']]);

        if ($result > 0) {
            $_SESSION['msgSucess'] = "Registrado";
        }
    } catch (Exception $e) {
        $_SESSION['msgError'] = "ERROR: " . $e->getMessage();
    }

    return header("Location: ../login.php");
    
    