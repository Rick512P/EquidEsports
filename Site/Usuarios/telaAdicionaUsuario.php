<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <form action="cadastro.php" method="POST">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Cadastramento de Usuários</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="InputNome">
            </div>
            <div class="mb-3 email" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="InputEmail">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputSenha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="InputSenha">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputDataDeNascimento" class="form-label">Data De Nascimento</label>
                <input type="text" class="form-control" name="data_de_nascimento" id="InputDataDeNascimento">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputCFP" class="form-label">CPF</label>
                <input type="text" class="form-control" name="CPF" id="InputCFP">
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="submit" class="botoes cor-gradiente text-white link">Cadastrar Usuário</button>
            </div>

        </form>
    </div>

</body>

</html>