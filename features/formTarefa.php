<?php

require_once "../lib/Database.php";
require_once "../lib/funcoes.php";

$db = new Database();
$func = new Funcoes();

$dados = [];

if ($_GET['acao'] != 'insert') {
    $dados = $db->dbSelect(
        "SELECT * FROM tarefas WHERE tarefaId = ?",
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
        <h1 class="px-5">Cadasto de tarefa</h1> <!-- <?= $_GET['acao'] ?> -->

        <hr class="my-2">
        <div class="container">
            <form class="g-3" action="<?= $_GET['acao'] ?>Tarefa.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?= Funcoes::setValue($dados, "tarefaId") ?>">
            
                <div class="row mx-2">
                    <div class="col-7 mt-4">
                        <label for="nome" class="form-label">Nome da tarefa</label>
                        <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" placeholder="Nome da tarefa" value="<?= Funcoes::setValue($dados, 'nomeTarefa') ?>" required autofocus>
                    </div>
                    
                    <div class="col-5 mt-4">
                        <label for="prazo" class="form-label">Prazo</label>
                        <input type="date" class="form-control" id="prazo" name="prazo" autocomplete="off" required value="<?= Funcoes::setValue($dados, 'prazo') ?>">
                    </div>
             
                    <div class="col-5 mt-4">
                        <label for="situacao" class="form-label">Situação</label>
                        <select class="form-control" id="situacao" name="situacao" required>
                                <option value=""  <?= Funcoes::setValue($dados, 'situacao') == ""  ? 'selected' : '' ?>>...</option>
                                <option value="1" <?= Funcoes::setValue($dados, 'situacao') == "1" ? 'selected' : '' ?>>Pendente</option>
                                <option value="2" <?= Funcoes::setValue($dados, 'situacao') == "2" ? 'selected' : '' ?>>Em andamento</option>
                                <option value="3" <?= Funcoes::setValue($dados, 'situacao') == "3" ? 'selected' : '' ?>>Finalizado</option>
                                <option value="4" <?= Funcoes::setValue($dados, 'situacao') == "4" ? 'selected' : '' ?>>Atrasado</option>
                        </select>
                    </div>

                    <div class="col-12 mt-4">
                        <label for="descricao" class="form-label">Descrição</label>
                        <div id="descricao"></div> <!-- Quill vai usar este contêiner -->
                        <input type="hidden" name="descricao" id="descricao" value="<?= Funcoes::setValue($dados, 'descricao') ?>"> <!-- Campo oculto para armazenar o conteúdo -->
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
        </div>
    </main>            
</body>
</html>
