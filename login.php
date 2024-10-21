<?php
    error_reporting(0);
    session_start();
    echo $_SESSION['msgError'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkDone - Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="shortcut icon" href="imagens/checkedIcon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div id="titulo-login">
        <h1>
            Work<span>Done</span>
        </h1>
    </div>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login
            </div>
            <div class="title signup">
                Registrar
            </div>
        </div>
        
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Registrar</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">

                <form method="POST" action="Features/autenticacaoUsuario.php" class="login">
                <div class="row px-1">  
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" autofocus required>
                    </div>

                    <div class="col-12">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                </div>
                <?php if ($_SESSION['msgError'] == "LoginIncorreto"): ?>
                        <div class="pass-link error">
                            <a>Senha ou Email incorretos</a>
                        </div>
                <?php endif;?>

                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                </div>

                <div class="signup-link">
                    Sem conta? <a href="">Registre agora</a>
                </div>
                </form>

                <form method="POST" action="Features/insertUsuario.php" class="signup">

                    <div class="row px-1">      
                        <div class="col-12">
                            <label for="registroEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="registroEmail" name="registroEmail" placeholder="Seu melhor Email" autofocus required>
                        </div>

                        <?php if ($_SESSION['msgError'] == "EmailEmUso"): ?>
                            <div class="pass-link error">
                                <a>Email já está em uso</a>
                            </div> 
                        <?php endif; ?>

                        <div class="col-6">
                            <label for="registroNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="registroNome" name="registroNome" placeholder="Nome de Usuário" required>
                            <?php if ($_SESSION['msgError'] == "nomeEmUso"): ?>
                                <div class="pass-link error">
                                    <a>Nome em uso</a>
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="col-6">
                            <label for="registroSenha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="registroSenha" name="registroSenha" placeholder="Senha" required>
                        </div>

                        <div class="col-7">
                            <label for="registroTelefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="registroTelefone" name="registroTelefone" placeholder="(99) 99999-9999">
                            <?php if ($_SESSION['msgError'] == "telefoneEmUso"): ?>
                                <div class="pass-link error">
                                    <a>Telefone em uso</a>
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="col-5">
                            <label for="registroSexo" class="form-label">Sexo</label>
                            <select class="form-control" id="registroSexo" name="registroSexo" required>
                                    <option value="">Prefiro não informar</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                            </select>
                        </div>
                    </div>
                    
                    <?php if ($_SESSION['msgSucess'] == "Registrado"): ?>
                        <div class="pass-link success">
                            <a>Registrado</a>
                        </div>
                    <?php endif; ?>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="JavaScript/login.js"></script>
    <?php session_unset() ?>
</body>
</html>