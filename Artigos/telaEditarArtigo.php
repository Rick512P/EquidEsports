<?php

use LDAP\Result;

    include_once('artigoDao.php');
    include_once("conexao.php");

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
    <title>Implementação de Artigos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <form action="editar.php" method="POST">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Implementação de Artigos</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="idartigo" class="form-label">ID</label><br>
                <input type="text" class="form-control" name="idartigos" id="idartigos" value="<?php echo($idartigo)?>" readonly>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputTitulo1" class="form-label">Título </label>
                <input type="text" class="form-control" name="titulo1" id="ImputTitulo1" value="<?php echo($row['titulo1']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputSubtitulo" class="form-label">Subtítulo</label>
                <input type="text" class="form-control" name="subtitulo" id="ImputSubtitulo" value="<?php echo($row['subtitulo']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputAutor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="nome_autor" id="ImputAutor" value="<?php echo($row['nome_autor']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputRedator" class="form-label">Redator</label>
                <input type="text" class="form-control" name="nome_redator" id="ImputRedator" value="<?php echo($row['nome_redator']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputParagrafo" class="form-label">Texto</label>
                <input type="text" class="form-control" name="paragrafos" id="ImputParagrafo" value="<?php echo($row['paragrafos']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputRodape" class="form-label">Rodapé</label>
                <input type="text" class="form-control" name="rodape" id="ImputRodape" value="<?php echo($row['rodape']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="ImputLink" class="form-label">URL</label>
                <input type="text" class="form-control" name="link_original" id="ImputLink" value="<?php echo($row['link_original']); ?>">
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="submit" class="botoes cor-gradiente text-white link">Editar Artigo</button>
            </div>

        </form>
    </div>

</body>

</html>