<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementação de Artigos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container" style="border: 4px solid black; padding: 0; margin-top: 0%;">
        <form action="cadastro.php" method="POST">
            <div class="imagem-topo">
                <h4 class="text-center text-white">
                    <b>Implementação de Artigos</b>
                </h4>
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputTitulo1" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo1" id="InputTitulo1">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputSubtitulo" class="form-label">Subtítulo</label>
                <input type="text" class="form-control" name="subtitulo" id="InputSubtitulo">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputAutor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="nome_autor" id="InputAutor">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputRedator" class="form-label">Redator</label>
                <input type="text" class="form-control" name="nome_redator" id="InputRedator">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputParagrafo" class="form-label">Texto</label>
                <input type="text" class="form-control" name="paragrafos" id="InputParagrafo">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputRodape" class="form-label">Rodapé</label>
                <input type="text" class="form-control" name="rodape" id="InputRodape">
            </div>
            <div class="mb-3 usuario" style="margin: 40px 0 40px 0; padding: 0 40px 0 40px;">
                <label for="InputLink" class="form-label">URL</label>
                <input type="text" class="form-control" name="link_original" id="InputLink">
            </div>
            <div class="container" style="margin: 40px 0 40px 0;">
                <button type="submit" class="botoes cor-gradiente text-white link">Inserir Artigo</button>
            </div>
            <div class="container" style="margin: 40px 0 40px 35%; padding: 5%;">
                <a class="botoes cor-gradiente text-white" style="border: 4px solid black;" href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>

</body>

</html>