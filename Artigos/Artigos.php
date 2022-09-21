<?php
    //Conexão com o Banco

    include_once('conexao.php');
    $conexao = criaConexao();

    //Paginação

    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    $array_page = 3;

    $number_page = "SELECT COUNT(idartigos) AS pgs FROM artigos";

    $resultado_pg = $conexao->prepare($number_page);

    $start = ($array_page * $pagina) - $array_page;

    $row_pg = $resultado_pg->fetch(PDO::FETCH_ASSOC);    

    $quant_pgs = ceil(($row_pg['pgs'] ?? 2) / $array_page);

    $retorna = $pagina - 1;
    $avanca = $pagina + 1;    

    $max_link = 2;

    //textos

    $sql = "SELECT * FROM artigos LIMIT $start, $array_page";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementação de Artigos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0;">
        <div class="imagem-topo">
            <h4 class="text-center text-white"> 
                <b>Artigos</b>
            </h4>                    
        </div>
        <div class="container" style="padding: 5%;">
            <h4>
                <?php
                    //textos

                    while($row_artigos = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "ID: " . $row_artigos['idartigos'] . "<br>" . "--------" . "</br>";
                        echo $row_artigos['titulo1'] . "</br>";
                        echo $row_artigos['subtitulo'] . "</br>";
                        echo $row_artigos['paragrafos'] . "</br>";
                        echo $row_artigos['rodape'] . "</br>";
                        echo "Link: " . $row_artigos['link_original'] . "</br><hr>";
                    }
                ?>
                <div class="text-center">
                    <?php
                    //paginação                    
                    echo "<a href='Artigos.php?pagina=1'> <<  ";
                    for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
                        if ($pag_ant >=1){
                            echo "<a href='Artigos.php?pagina=$retorna'> < ";
                            echo "<a href='Artigos.php?pagina=$pag_ant'> $pag_ant";
                        }
                    }
                    echo $pagina;
                    for($pag_pos = $pagina + 1; $pag_pos <= $pagina + $max_link; $pag_pos ++){
                        if ($pag_pos <= $quant_pgs){
                            echo "<a href='Artigos.php?pagina=$pag_pos' > $pag_pos";
                        }
                    }
                    if ($pag_pos <= $quant_pgs){
                        echo "<a href='Artigos.php?pagina=$avanca'> > ";
                    }
                    echo "<a href='Artigos.php?pagina=$quant_pgs'>   >>";
                    ?>
                </div>
            </h4>
        </div>
    </div>
    <div class="text-center" style="padding: 0; margin-top: 2%;">
        <h2>
            <a class="botoes cor-gradiente text-white" href="telaAdicionaArtigo.php" role="button">Cadastrar Novo Artigo</a>
        </h5>
    </div>

</body>

</html>