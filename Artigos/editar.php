<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript">
            function redirectTime(){ // Função que define o tempo
                window.location = "index.php" //Define o link de redirecionamento
            }
</script>

    </head>
    <body onLoad="setTimeout('redirectTime()', 1500)">
        <div class="container" style="border: 4px solid black; padding: 0px; margin-top:15%;">
            <h4 class="text-center texte-darkblue">
                Redirecionando
            </h4>
        </div>
        <?php
            include_once('artigoDao.php');

            date_default_timezone_set('America/Sao_Paulo');

            $titulo1 = $_POST['titulo1'];
            $subtitulo = $_POST['subtitulo'];
            $nome_autor = $_POST['nome_autor'];
            $nome_redator = $_POST['nome_redator'];
            $paragrafos = $_POST['paragrafos'];
            $rodape = $_POST['rodape'];
            $link_original = $_POST['link_original'];

            editaArtigo($idartigo, $titulo1, $subtitulo, $nome_autor, $nome_redator, $paragrafos, $rodape, $link_original);
        ?>
    </body>
</html>
