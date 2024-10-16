<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Registro</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
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
            <form method="POST" action="index.html" class="login">
                <div class="field">
                    <input type="text" name="email" id="email" placeholder="Email " required>
                </div>
                <div class="field">
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Entrar">
                </div>
                <div class="signup-link">
                    Sem conta? <a href="">Registre agora</a>
                </div>
            </form>

            <form method="POST" action="#" class="signup">
                <div class="field">
                    <input type="text" name="registroEmail" id="registroEmail" placeholder="Email " required>
                </div>
                <div class="field">
                    <input type="password" name="registroSenha" id="registroSenha" placeholder="Senha" minlength="8" required>
                </div>
                <div class="field">
                    <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Confirma senha" required>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </div>
</div>

    <script type="text/javascript" src="login.js"></script>

</body>
</html>