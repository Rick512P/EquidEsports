<?php

    define("SERVER", "127.0.0.2");
    define("USER", "root");
    define("PASS", "root");
    define("EquidDataBase", "usuarios");

    function criaConexao()
    {
        // Criando conexao com o banco estacionamento
        try {
            $conexao = new PDO('mysql:host=' . SERVER . ';dbname=' . EquidDataBase, USER, PASS);
            return $conexao;
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }

}
