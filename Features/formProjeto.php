<?php

require_once "../lib/Database.php";
require_once "../lib/funcoes.php";

$db = new Database();
$func = new Funcoes();

$dados = [];

if ($_GET['acao'] != 'insert') {
    $dados = $db->dbSelect(
        "SELECT nomeProjeto, prazo, descricao, situacao FROM projetos WHERE projetoId = ?",
        'first',
        [$_GET['id']]
    );
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkDone</title>
    <link rel="stylesheet" href="../css/projeto.css">
    <link rel="shortcut icon" href="../imagens/checkedIcon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="JavaScript/main.js" defer></script>
</head>
<body>
    <header>
        <a href="../index.php" id="titulo">
            <h1>Work<span>Done</span></h1>
        </a>
    </header>

    <main>
        <h1>Cadasto de Projetos</h1>

        <hr class="my-2">
        <form class="g-3" action="<?= $_GET['acao'] ?>projeto.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= Funcoes::setValue($dados, "id") ?>">
            <div class="row mx-2">
                <div class="col-7">
                    <label for="nome" class="form-label">Nome do Projeto</label>
                    <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" placeholder="Nome do Projeto" required autofocus>
                </div>

                <div class="col-5">
                    <label for="prazo" class="form-label">Prazo</label>
                    <input type="date" class="form-control" id="prazo" name="prazo" autocomplete="off" required autofocus>
                </div>

                <div class="col-7">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" autocomplete="off" placeholder="Descrição do seu Projeto" required autofocus>
                </div>

                <div class="col-5">
                    <label for="situacao" class="form-label">Situação</label>
                    <select name="select" class="form-control" id="situacao" name="situacao" required>
                        <option value="" selected>...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <a href="../index.php" 
                        class="btn btn-outline-secondary btn-sm">
                        Voltar
                    </a>

                    <?php if ($_GET['acao'] != 'view'): ?>
                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </main>
</body>
</html>