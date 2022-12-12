<?php
date_default_timezone_set('America/Sao_Paulo');

session_start();
include_once("./conexoes/conexaousuario.php");

$conexao = criaConexao();  

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}


$name = $_POST['nome'];
$nome = "$name";
$password = $_POST['senha'];
$senha="$password";

$sql = "SELECT * FROM users where (email=:nome and senha=md5(:senha)) or (nome=:nome and senha=md5(:senha))";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $nome );
$stmt->bindParam(":senha", $senha);
$stmt->execute();

$test =  $stmt->fetch();

print_r($test);

if ($test != NULL){
    if ($test[6]==="yes"){

        $_SESSION['nome'] = $nome;
        header('Location: opcoes.php');
        exit();}

    if ($test[6]==="no"){

        $_SESSION['nome'] = $nome;
        header('Location: Front/Artigos.php');
        exit();}
    }else{
    ?> 
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="./css/style.css">
            <script type="text/javascript">
                function redirectTime(){ // Função que define o tempo
                    window.location = "index.php" //Define o link de redirecionamento
                }
            </script>
        </head>
        <body onLoad="setTimeout('redirectTime()', 1500)">
            <div class="container" style="border: 4px solid black; padding: 0px; margin-top:50%;">
                <h4 class="text-center texte-darkblue">
                Senha ou e-mail/nome incorreto(s)
                </h4>
            </div>
        </body>
    </html>
    <?php
}
