<?php
    //Verifica se a sessão está ativa

    include_once('../login/verifica_login.php');

    //Conexão com o Banco

    include_once('../conexoes/conexaoartigo.php');
    
    $conexao = criaConexao();

    //Paginação

    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    $array_page = 3;

    $start = ($array_page * $pagina) - $array_page;

    $number_page = "SELECT COUNT(idartigos) FROM artigos";
    $row_page = $conexao->prepare($number_page);
    $row_page->execute();    

    $row_pg = $row_page->fetch();

    $count_pgs = ceil($row_pg[0] / $array_page);

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
    <title>Lista de Artigos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div style="border: 4px solid black; ">
        <div class="imagem-topo">
            <h4 class="text-center text-white"> 
                <b>Artigos</b>
            </h4>                    
        </div>
        <div class="container" style="padding: 8%;">
            <h4>
                <?php
                    //textos
                    function text_limiter_caracter($stmt, $limit, $suffix = '...'){
                        while (substr($stmt, $limit, 1) != ' ') {
                            $limit--;
                        }

                        if (strlen($stmt) <= $limit) {
                            return $stmt;
                        }

                        return substr($stmt, 0, $limit + 1) . $suffix;
                    }

                    while($row_artigos = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "Título: <b>" . $row_artigos['titulo1'] . "</b><br/>";
                        echo "Autor(a/as/es): <b>" . $row_artigos['nome_autor'] . "</b><br><br/>";
                        echo text_limiter_caracter($row_artigos['paragrafos'], 300,"<a href='./leitor.php?id=".$row_artigos['idartigos'] . "'>...") . " " . "</a>" . "</b><br/>";
                        echo "<br/> <hr>";
                    }                    
                ?>
                <div class="text-center">
                    <?php
                    //paginação                    
                    
                    if($pagina >= 2){
                        echo "<a href='Artigos.php?pagina=1'> <<  </a>";
                        echo "<a href='Artigos.php?pagina=$retorna'> < </a>";
                    }
                    for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
                        if ($pag_ant >=1){
                            echo "<a href='Artigos.php?pagina=$pag_ant'> $pag_ant </a>";
                        }
                    }
                    echo $pagina;
                    for($pag_pos = $pagina + 1; $pag_pos <= $pagina + $max_link; $pag_pos ++){
                        if ($pag_pos <= $count_pgs){
                            echo "<a href='Artigos.php?pagina=$pag_pos' > $pag_pos </a>";
                        }
                    }

                    if ($pagina < $count_pgs){
                        echo "<a href='Artigos.php?pagina=$avanca'> > </a>";
                        echo "<a href='Artigos.php?pagina=$count_pgs'>   >></a>";
                    }                    
                    ?>
                </div>
            </h4>
        </div>
    </div>
</body>
</html>