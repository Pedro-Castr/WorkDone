<?php
    error_reporting(0);
    session_start();

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

                    </div>

                    <?php if ($_SESSION['msgError'] == "SenhasDiferentes"): ?>
                        <div class="pass-link error">
                            <a>Insira a mesma senha</a>
                        </div>
                    <?php endif;?>

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