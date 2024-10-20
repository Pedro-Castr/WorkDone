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

        <div class="row mx-2">
            <div class="col-7">
                <label for="descricao" class="form-label">Nome do Projeto</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Nome do Projeto" required autofocus>
            </div>

            <div class="col-5">
                <label for="descricao" class="form-label">Prazo</label>
                <input type="date" class="form-control" id="descricao" name="descricao" required autofocus>
            </div>

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do seu Projeto" required autofocus>
            </div>
        </div>
    </main>
</body>
</html>