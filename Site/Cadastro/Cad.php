<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript">
            function redirectTime(){ // Função que define o tempo
                window.location = "../" //Define o link de redirecionamento
            }
        </script>

    </head>
    <body onLoad="setTimeout('redirectTime()', 1500)">
        <div class="container" style="border: 4px solid black; padding: 0px; margin-top:15%;">
            <h4 class="text-center texte-darkblue">
                Redirecionando
            </h4>
        </div>
        <?php
            include_once('CadDao.php');

            date_default_timezone_set('America/Sao_Paulo');

            $nome = strtoupper($_POST['nome']);
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_de_nascimento = $_POST['data_de_nascimento'];
            $CPF = $_POST['CPF'];
            $ADMINISTRADOR = 'no';

            insereUsuario($nome, $email, $senha, $data_de_nascimento, $CPF, $ADMINISTRADOR);
        ?>
    </body>
</html>
