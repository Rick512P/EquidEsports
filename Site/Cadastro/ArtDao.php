<?php
    //Verifica se a sessão está ativa

    include_once('../login/verifica_login.php');
    
    include_once("../conexoes/conexaoartigo.php");

    function insereArtigo($titulo1, $subtitulo, $nome_autor, $nome_redator, $paragrafos, $rodape, $link_original)
    {
        $conexao = criaConexao();

        $sql = "INSERT INTO artigos (titulo1, subtitulo, nome_autor, nome_redator, paragrafos, rodape, link_original) VALUES (:titulo1, :subtitulo, :nome_autor, :nome_redator, :paragrafos, :rodape, :link_original)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":titulo1", $titulo1);
        $stmt->bindParam(":subtitulo", $subtitulo);
        $stmt->bindParam(":nome_autor", $nome_autor);
        $stmt->bindParam(":nome_redator", $nome_redator);
        $stmt->bindParam(":paragrafos", $paragrafos);
        $stmt->bindParam(":rodape", $rodape);
        $stmt->bindParam(":link_original", $link_original);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }
