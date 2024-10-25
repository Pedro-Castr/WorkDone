<?php

require_once "../lib/Database.php";
require_once "../lib/funcoes.php";

$db = new Database();
$func = new Funcoes();

$dados = [];

if ($_GET['acao'] != 'insert') {
    $dados = $db->dbSelect(
        "SELECT * FROM projetos WHERE projetoId = ?",
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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> <!-- Quill CSS -->
</head>
<body>
    <header>
        <a href="../index.php" id="titulo">
            <h1>Work<span>Done</span></h1>
        </a>    
    </header>

    <main>
        <h1 class="px-5">Cadasto de Projetos</h1> <!-- <?= $_GET['acao'] ?> -->

        <hr class="my-2">
        <div class="container">
            <form class="g-3" action="<?= $_GET['acao'] ?>Projeto.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?= Funcoes::setValue($dados, "projetoId") ?>">
            
                <div class="row mx-2">
                    <div class="col-7 mt-3 mb-3">
                        <label for="nome" class="form-label">Nome do Projeto</label>
                        <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" placeholder="Nome do Projeto" value="<?= Funcoes::setValue($dados, 'nomeProjeto') ?>" required autofocus>
                    </div>
                    <div class="col-5 mt-3 mb-3">
                        <label for="prazo" class="form-label">Prazo</label>
                        <input type="date" class="form-control" id="prazo" name="prazo" autocomplete="off" required value="<?= Funcoes::setValue($dados, 'prazo') ?>">
                    </div>
                    <div class="col-12 mt-3 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <div id="comboBox"></div> <!-- Quill vai usar este contêiner -->
                        <input type="hidden" name="descricao" id="descricao" value="<?= Funcoes::setValue($dados, 'descricao') ?>"> <!-- Campo oculto para armazenar o conteúdo -->
                    </div>
                </div><br>
                <div class="row mt-5">
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

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        // Inicializa o editor Quill
        var quill = new Quill('#comboBox', {
            theme: 'snow',
            placeholder: 'Digite a descrição do projeto aqui...',
        });

        // Atualiza o conteúdo do campo oculto com o conteúdo HTML do editor Quill
        document.querySelector('form').onsubmit = function() {
            var editorContent = quill.root.innerHTML;
            document.getElementById('comboBox').value = editorContent;
        };
    </script>
</body>
</html>