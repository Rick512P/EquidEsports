<?php
//Verifica se a sessão está ativa

include_once('./verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela Inicial</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div style="border: 0px solid black; padding: 0%;">
            <div class="imagem-topo">
                <h2 class="text-center text-white">
                    <b>
                        <?php echo "Seja Bem Vindo " . $_SESSION['nome'] . "!";?>
                    </b>
                </h2>                 
            </div>
            <div class="container" style="padding: 0%;">
                <div class="text-center" style="padding: 1%; margin: 10%; margin-top:5%;">
                    <h2>
                        <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="./Usuarios/" role="button">Lista de Usuários</a>
                    </h2>
                    <br>
                    <h2>
                        <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="./Artigos/" role="button">Lista de Artigos</a>
                    </h2>
                </div>
            </div>
        </div>
    </body>
</html>
