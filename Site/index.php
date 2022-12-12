<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div style="padding: 50% 5% 50% 5%;">
        <div class="container" style="border: 4px solid black; padding: 0;">
            <form action="./login/login.php" method="POST">
                <div class="imagem-topo">
                    <h4 class="text-center text-white">
                        <b>Login</b>
                    </h4>
                </div>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                    <label for="InputNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="InputNome">
                </div>
                <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                    <label for="InputSenha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="InputSenha">
                </div>
                <div class="container" style="margin: 40px 0 40px 0;">
                    <div class="text-center">
                        <button type="submit" class="botoes cor-gradiente text-white link">Conectar Usuário</button>
                    </div>
                    <div class="text-center" style="padding: 1%; margin: 10%; margin-top:5%;">
                        <h4>
                            <a class="botoes cor-gradiente text-white"  href="./Cadastro/CadUser.php" role="button">Novo? Crie uma conta!</a>
                        </h4>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>