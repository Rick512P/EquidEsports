<?php
    
    include_once('../conexoes/conexaousuario.php');

    function insereUsuario($nome, $email, $senha, $data_de_nascimento, $CPF, $ADMINISTRADOR)
    {
        $conexao = criaConexao();

        $sql = "INSERT INTO users (nome, email, senha, data_de_nascimento, CPF, ADMIN) VALUES (:nome, :email, md5(:senha), :data_de_nascimento, :CPF, :ADMINISTRADOR)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":data_de_nascimento", $data_de_nascimento);
        $stmt->bindParam(":CPF", $CPF);
        $stmt->bindParam(":ADMINISTRADOR", $ADMINISTRADOR);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }
    }