<?php
date_default_timezone_set('America/Sao_Paulo');

session_start();
include_once("./conexoes/conexaousuario.php");

$conexao = criaConexao();  

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$sql = "SELECT * FROM users where email=:usuario and senha=md5(:senha) or nome=:usuario and senha=md5(:senha)";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":usuario",  $_POST['usuario']);
$stmt->bindParam(":senha", $_POST['senha']);

$stmt->execute();

$testa = $stmt['nome'];

if ($testa != NULL){
    header('Location: opcoes.php');

}else{
    echo "Senha ou e-mail incorreto(s)";
}