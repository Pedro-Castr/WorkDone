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
            <!-- Essa div aparecerá caso não tenha nenhum projeto   
            <div id="sem-projetos">
                <p>Seus projetos aparecerão aqui</p>
            </div>
            -->

            <div id="add-projeto">
                <h5>Adicionar projeto</h5>
            </div>

            <div id="projetos">
                <ul>
                    <li>Projeto teste1</li>
                    <li>projeto teste 02</li>
                    <li>teste 03</li>
                    <li>projeto grande teste 04</li>
                </ul>
            </div>
        </nav>
        
        <main>
            <!-- Essa div vai aparecer quando não tiver nenhum projeto aberto
            <div id="sem-projetos-main>
                <p>Está um pouco quieto por aqui, crie seu primeiro projeto agora mesmo!</p>
                <a href="./Features/formProjeto.php?acao=insert&id=">
                    <img src="imagens/plus-lg.svg" alt="Cria projeto">
                </a>
            </div>
            -->

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

                <a href="./Features/formProjeto.php?acao=insert">
                    <div id="btn-add-task">
                        <button class="add-task">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Adicionar Tarefa</span>
                        </button>
                    </div>
                </a>

                <table class="table table-hover table-bordered table-responsive-sm mt-4">
                    <thead>
                        <tr>
                            <th>Tarefa</th>
                            <th>Prazo</th>
                            <th style="width: 1%;">Ações</th> <!-- Limita a largura da coluna -->
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Cadastrar Projeto</td>
                            <td>12/12/2024</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-danger me-2"><img class="icon" src="imagens/trash.svg" alt="Apagar tarefa"></button>
                                <button type="button" class="btn btn-success"><img class="icon" src="imagens/check.svg" alt="Concluir Tarefa"></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>