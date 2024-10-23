<?php 

session_start();

if (isset($_POST['nome'])) {

    // Carrega lib do banco de dados
    require_once "../lib/Database.php";

    // criar o objeto do banco e dados
    $db = new Database();

    try {
        $result = $db->dbDelete("DELETE FROM projetos
                                WHERE projetoId = ?"
                                , [
                                    $_POST['id']
                                ]);
        
        if ($result > 0) {      // sucesso
            $_SESSION['msgSuccess'] = "Registro excluído com sucesso.";
        }

    } catch (\Exception $e) {
        $_SESSION['msgError'] = "ERROR: " . $e->getMessage();
    }
} 

return header("Location: ../index.php");