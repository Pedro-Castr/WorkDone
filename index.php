<?php
    require_once "lib/Database.php";
    require_once "lib/funcoes.php";

    $db = new Database();

    $data = $db->dbSelect("SELECT * FROM projetos");
    $dataTarefa = $db->dbSelect("SELECT * FROM tarefas");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkDone</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="shortcut icon" href="imagens/checkedIcon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="JavaScript/main.js" defer></script>
</head>
<body>
    <header>
        <button id="navbar">
            <img src="imagens/list.svg" alt="Menu">
        </button>

        <a href="index.php" id="titulo">
            <h1>Work<span>Done</span></h1>
        </a>

        <a href="login.php" id="configuracoes">
            <img src="imagens/gear.svg" alt="Configurações">
        </a>
    </header>
    
    <div id="container">
        <nav id="sidebar">
            <?php if (count($data) > 0): ?>   
                <div id="add-projeto">
                    <a href="./Features/formProjeto.php?acao=insert">
                        <h5>Adicionar projeto</h5>
                    </a>
                </div>

                <div id="projetos">
                    <ul>
                        <?php foreach ($data as $row): ?>
                            <li><?= $row['nomeProjeto'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            <?php else: ?>
                <div id="sem-projetos">
                    <p>Seus projetos aparecerão aqui</p>
                </div>
            <?php endif; ?>

            <div id="notas">
                <a href="#">
                    <h5>Bloco de Notas</h5>
                </a>
                <img src="imagens/journal.svg" alt="Bloco de Notas">
            </div>
        </nav>
        
        <main>
            <?php if (count($data) > 0): ?>
                <div id="projetos-main">
                    <div class="cabecalho-projeto">
                        <div id="cabecalho">
                            <h2>Nome do projeto para teste</h2>
                            <h3>23/04/2025</h3>
                        </div>
                        <p class="descricao-projeto">
                            descrição do projeto: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatum omnis unde ipsam totam, reprehenderit
                        </p>
                    </div>

                    <div id="botoes">
                        <a href="./Features/formTarefa.php?acao=insert">
                            <button class="button btn-add">
                                <span class="button-content">Adicionar Tarefa</span>
                            </button>
                        </a>

                        <a href="#">
                            <button class="button btn-del">
                                <span class="button-content">Excluir Projeto</span>
                            </button>
                        </a>
                    </div>

                    <div class="container">
                        <table class="table table-hover table-bordered table-responsive-sm mt-4">
                            <thead>
                                <tr>
                                    <th>Tarefa</th>
                                    <th>Prazo</th>
                                    <th>Situação</th>
                                    <th style="width: 200px;">Ações</th> <!-- Limita a largura da coluna -->
                                </tr>
                            </thead>
                        <tbody>
                            <?php foreach ($dataTarefa as $row): ?>
                                <tr>
                                    <td><?= $row['nomeTarefa'] ?></td>
                                    <td><?= date('d/m/Y', strtotime($row['prazo'])) ?></td>
                                    <td><?=Funcoes::getSituacao($row['situacao']) ?></td>
                                    <td>
                                        <a href="./Features/formTarefa.php?acao=delete&id=<?= $row['tarefaId'] ?>" class="btn btn-danger me-2"><img class="icon" src="imagens/trash.svg" alt="Apagar Tarefa"></a>
                                        <a href="./Features/formTarefa.php?acao=update&id=<?= $row['tarefaId'] ?>" class="btn btn-warning me-2"><img class="icon" src="imagens/pencil.svg" alt="Editar Tarefa"></a>
                                        <a href="./Features/formTarefa.php?acao=concluir&id=<?= $row['tarefaId'] ?>" class="btn btn-success"><img class="icon" src="imagens/check.svg" alt="Concluir Tarefa"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <div id="sem-projetos-main">
                                    <p>Está um pouco quieto por aqui, crie seu primeiro projeto agora mesmo!</p>
                                    <a href="./Features/formProjeto.php?acao=insert&id=">
                                        <img src="imagens/plus-lg.svg" alt="Cria projeto">
                                    </a>
                                </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>