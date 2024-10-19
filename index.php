<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkDone</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="shortcut icon" href="imagens/checkedIcon.png" type="image/x-icon">
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
            <div>
                <p>Está um pouco quieto por aqui, crie seu primeiro projeto agora mesmo!</p>
                <a href="#">
                    <img src="imagens/plus-lg.svg" alt="Cria projeto">
                </a>
            </div>
        </main>
    </div>
</body>
</html>