<?php

    //Verifica se a sessão está ativa

    include_once('../verifica_login.php');
    
    //Conexão com o Banco

    include_once('../conexoes/conexaousuario.php');

    $conexao = criaConexao();

    //Paginação

    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    $array_page = 3;

    $start = ($array_page * $pagina) - $array_page;

    $number_page = "SELECT COUNT(idusers) FROM users";
    $row_page = $conexao->prepare($number_page);
    $row_page->execute();    

    $row_pg = $row_page->fetch();

    $count_pgs = ceil($row_pg[0] / $array_page);

    $retorna = $pagina - 1;
    $avanca = $pagina + 1;    

    $max_link = 2;

    //textos

    $sql = "SELECT * FROM users LIMIT $start, $array_page";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div style="border: 4px solid black; padding: 0%;">
        <div class="imagem-topo">
            <h4 class="text-center text-white"> 
                <b>Usuários</b>
            </h4>                    
        </div>
        <div class="container" style="padding: 5%;">
            <h4>
                <?php
                    //textos

                    while($row_usuarios = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $update=$row_usuarios['idusers'];
                        echo "ID: <b>" . $row_usuarios['idusers'] . " ". "<a href='./telaEditarUsuario.php?id=".$row_usuarios['idusers']."'><img src='../css/update.png' height='24' width='24'></a>" . " ". "<a href='./apagar.php?id=".$row_usuarios['idusers']."'><img src='../css/delete.png' height='24' width='24'></a>" . "</b><br/>--------<br/>";
                        echo "Nome: <b>" . $row_usuarios['nome'] . "</b><br/>";
                        echo "E-mail: <b>" . $row_usuarios['email'] . "</b><br/>";
                        echo "Data de Nascimento: <b>" . $row_usuarios['data_de_nascimento'] . "</b></b><br/>";
                        echo "CPF: <b>" . $row_usuarios['CPF'] . "</b><br/>";
                        echo "Admin: <b>" . $row_usuarios['ADMIN'] . "</b><br/><br/>";
                        echo "<br/> <hr>";
                    }
                ?>

                <div class="text-center">
                    <?php
                    //paginação                    
                    
                    if($pagina >= 2){
                        echo "<a href='Usuarios.php?pagina=1'> <<  </a>";
                        echo "<a href='Usuarios.php?pagina=$retorna'> < </a>";
                    }
                    for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
                        if ($pag_ant >=1){
                            echo "<a href='Usuarios.php?pagina=$pag_ant'> $pag_ant </a>";
                        }
                    }
                    echo $pagina;
                    for($pag_pos = $pagina + 1; $pag_pos <= $pagina + $max_link; $pag_pos ++){
                        if ($pag_pos <= $count_pgs){
                            echo "<a href='Usuarios.php?pagina=$pag_pos' > $pag_pos </a>";
                        }
                    }

                    if ($pagina < $count_pgs){
                        echo "<a href='Usuarios.php?pagina=$avanca'> > </a>";
                        echo "<a href='Usuarios.php?pagina=$count_pgs'>   >></a>";
                    }
                    
                    ?>
                </div>
            </h4>
            <div class="text-center" style="padding: 0%; margin: 2%; margin-top:5%;">
                <h2>
                    <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="telaAdicionaUsuario.php" role="button">Cadastrar Novo Usuarios</a>
                </h2>
            </div>
            <div class="container" style="margin: 40px 0 40px 35%; padding: 5%;">
                <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="../opcoes.php" role="button">Voltar</a>
            </div>
        </div>
    </div>
    

</body>

</html>