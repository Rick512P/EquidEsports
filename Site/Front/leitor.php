<?php

use LDAP\Result;

    include_once('artigoDao.php');
    include_once("../conexoes/conexaoartigo.php");

    $idartigo = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result = "SELECT * FROM artigos WHERE idartigos = '$idartigo' ";
    $conexao = criaConexao();
    $stmt = $conexao->prepare($result);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Artigos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./../css/style.css"/>
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <div class="imagem-topo">
            <h4 class="text-center text-white">
                <b>Edição de Artigos</b>
            </h4>
        </div>
        
        <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
            <b> Título: </b> 
                <a> 
                    <?php echo($row['titulo1']); ?> 
                </a> 
            <br>
            <b> Subtítulo: </b> 
                <a> 
                    <?php echo($row['subtitulo']); ?> 
                </a> 
            <br>
            <a>
                <?php echo($row['paragrafos']); ?>
            </a> 
            <br>
            <br>
            <b> Rodapé: </b>  
                <a>
                    <?php echo($row['rodape']); ?>
                </a> 
            <br>
            <b> Link Original: </b> 
            <a href='<?php echo($row['link_original']); ?>'>
                <?php echo($row['link_original']); ?>
            </a>
        </div>

        <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
            <b> Autor: </b> 
                <a>
                    <?php echo($row['nome_autor']); ?>
                </a>
            <br>
            <b> Redator: </b> 
                <a>
                    <?php echo($row['nome_redator']); ?>
                </a>
        </div>
    </div>
    <div class="container" style="margin: 40px 0 40px 35%; padding: 5%;">
        <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="index.php" role="button">Voltar</a>
    </div>
</body>

</html>