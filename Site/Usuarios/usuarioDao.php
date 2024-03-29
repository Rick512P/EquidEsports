<?php
    //Verifica se a sessão está ativa

    include_once('../login/verifica_login.php');

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

    function editaUsuario($idusers, $nome, $email, $senha, $data_de_nascimento, $CPF, $ADMINISTRADOR)
    {

        $conexao = criaConexao();

        $sql = "UPDATE users set nome=:nome, email=:email, senha=md5(:senha), data_de_nascimento=:data_de_nascimento, CPF=:CPF, ADMIN=:ADMINISTRADOR where idusers=:idusers";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":idusers", $idusers);
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

    function apagaUsuario($idusers)
    {

        $conexao = criaConexao();

        $sql = "DELETE from users where idusers=:idusers";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":idusers", $idusers);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }        
    }

    function login($nome, $senha){
        $conexao = criaConexao();

        $sql = "SELECT nome, email, senha, data_de_nascimento, CPF, ADMIN from users where nome = :nome' and senha = md5(:senha)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", $senha);

        try {
            if ($stmt->execute()) {
            } else {
                print_r($stmt->errorInfo());
            }
        } catch (PDOException $e) {
            echo "Erro na conexão. Erro gerado: " . $e->getMessage();
        }  
        
    }
