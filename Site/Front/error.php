<?php
    //Verifica se a sessão está ativa

include_once('../login/verifica_login.php');
    
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
    <form action="enviar.php" name="form_contato" method="post">
        <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Escreva um Pequeno Parágrafo Referente ao Problema:</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputID" class="form-label">Id</label>
                <input type="id" class="form-control" name="id" value="<?php echo($row['idartigos']); ?>" id="InputID" readonly="True">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputName" class="form-label">Seu Nome</label>
                <input type="text" class="form-control" name="name" id="InputName">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputCPF" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="InputCPF">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputError" class="form-label">Erro</label>
                <input type="text" class="form-control" name="error" id="InputError">
            </div>  
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="reset" class="botoes cor-gradiente text-white link">Limpar</button>
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="submit" class="botoes cor-gradiente text-white link">Enviar</button>
            </div>
            <div class="container" style="margin: 40px 0 40px 35%; padding: 5%;">
                <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="../Front/" role="button">Cancelar</a>
            </div>
        </div>
    </form>
</body>