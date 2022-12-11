<?php
    //Verifica se a sessão está ativa

    include_once('../verifica_login.php');
    
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
    <title>Leitor <?php echo($row['titulo1']); ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./../css/style.css"/>
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <div class="imagem-topo">
            <h4 class="text-center text-white">
                <b><?php echo($row['titulo1']); ?></b>
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
            <a href='<?php echo($row['link_original']); ?>'>
                Link Original
            </a>
        </div>

        <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
            <b> Autor(a/as/es): </b> 
                <a>
                    <?php echo($row['nome_autor']); ?>
                </a>
            <br>
            <a>
                <b> Redator: </b> 
            </a>
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