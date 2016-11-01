<?php
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

$conexao = conectar();

$nome_usuario = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$senha = md5($_POST["senha"]);
$email = $_POST["email"];

$sql = "insert into usuario 
	(nm_usuario,sb_nm_usuario,snh_usuario,eml_usuario) 
	values 
	('{$nome_usuario}','{$sobrenome}','{$senha}','{$email}')
";

if(mysqli_query($conexao, $sql)){
	$m = "1";
}else{
	$m = "";
};

header("Location: login.php?m=".$m);
?>