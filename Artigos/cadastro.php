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

    insereArtigo($titulo1, $subtitulo, $nome_autor, $nome_redator, $paragrafos, $rodape, $link_original);

    echo '<a class="botoes cor-gradiente text-white" href="index.php" role="button">Voltar</a>';
