<?php 

session_start();

if (isset($_POST['nome'])) {

    // Carrega lib do banco de dados
    require_once "../lib/Database.php";
    
    require_once "../lib/funcoes.php";

    // criar o objeto do banco e dados
    $db = new Database();

    try {
        $result = $db->dbInsert("INSERT INTO projetos
                                (nomeProjeto, prazo, descricao)
                                VALUES (?, ?, ?)"
                                ,[
                                    $_POST['nome'],
                                    $_POST['prazo'],
                                    $_POST['descricao'],
                                ]);
        
        if ($result > 0) {      // sucesso
            $_SESSION['msgSuccess'] = "Projeto inserido com sucesso.";
        }

    } catch (Exception $e) {
        $_SESSION['msgError'] = "ERROR: " . $e->getMessage();
    }
} 

return header("Location: ../index.php");