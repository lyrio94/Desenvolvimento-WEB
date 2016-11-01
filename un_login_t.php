<?php
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

$conexao = conectar();

$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$l = 0;

$sql = "select count(*) from usuario where eml_usuario='{$email}'";
$rs = mysqli_query($conexao, $sql);
$user = mysqli_fetch_assoc($rs);

$sql = "select count(*) from usuario where snh_usuario='{$senha}'";
$result = mysqli_query($conexao, $sql);
$user2 = mysqli_fetch_assoc($result);

$sql = "select count(*) from usuario where eml_usuario='{$email}' and snh_usuario='{$senha}'";
$results = mysqli_query($conexao, $sql);
$user3 = mysqli_fetch_assoc($results);

print intval($user)."<br/>";
print intval($user2)."<br/>";
print intval($user3);

// if($user == 0){
// 	$l = 2;
// 	header("Location: login.php?m=".$l);
// }else if($user2 == 0){
// 	$l = 3;
// 	header("Location: login.php?m=".$l);
// }else if($user3 == 0){
// 	$l = 4;
// 	header("Location: login.php?m=".$l);
// }else{
// 	header("Location: principal.php");
// }
?>