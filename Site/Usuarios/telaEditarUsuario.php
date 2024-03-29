<?php 
    //Verifica se a sessão está ativa

    include_once('../login/verifica_login.php');

    include_once('usuarioDao.php');
    
    include_once('../conexoes/conexaousuario.php');

    $idusers = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result = "SELECT * FROM users WHERE idusers = '$idusers' ";
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
    <title>Edição de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./../css/style.css"/>
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <form action="editar.php" method="POST">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Edição de Usuários</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="idartigo" class="form-label">ID</label><br>
                <input type="text" class="form-control" name="idusers" id="idusers" value="<?php echo($idusers)?>" readonly>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="InputNome" value="<?php echo($row['nome']); ?>">
            </div>
            <div class="mb-3 email" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="InputEmail" value="<?php echo($row['email']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputSenha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="InputSenha" value="<?php echo($row['senha']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputDataDeNascimento" class="form-label">Data De Nascimento</label>
                <input type="text" class="form-control" name="data_de_nascimento" id="InputDataDeNascimento" value="<?php echo($row['data_de_nascimento']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputCFP" class="form-label">CPF</label>
                <input type="text" class="form-control" name="CPF" id="InputCFP" value="<?php echo($row['CPF']); ?>">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputADMIN" class="form-label">Admin</label>
                <input type="text" class="form-control" name="ADMINISTRADOR" id="InputADMIN" value="<?php echo($row['ADMIN']); ?>">
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="submit" class="botoes cor-gradiente text-white link">Editar Usuário</button>
            </div>
            <div class="container" style="margin: 40px 0 40px 35%; padding: 5%;">
                <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>

</body>

</html>