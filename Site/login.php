<?php
date_default_timezone_set('America/Sao_Paulo');

session_start();
include_once("./conexoes/conexaousuario.php");

$conexao = criaConexao();  

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}


$name = $_POST['nome'];
$nome = "$name";
$password = $_POST['senha'];
$senha="$password";

$sql = "SELECT * FROM users where (email=:nome and senha=md5(:senha)) or (nome=:nome and senha=md5(:senha))";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $nome );
$stmt->bindParam(":senha", $senha);
$stmt->execute();

$test =  $stmt->fetch();

print_r($test);

if ($test != NULL){
    header('Location: opcoes.php');

}else{
    echo "Senha ou e-mail incorreto(s)";
}