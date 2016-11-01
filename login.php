<?php
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

session_start();

$conexao = conectar();

   // username and password sent from form 
   
   $usuario = $_POST['email'];
   $senha = $_POST['senha']; 

   // print "Usuario: ".$usuario."<br/>";
   // print "Senha: ".$senha."<br/>";
   
   $sql = "SELECT * FROM usuario WHERE eml_usuario = '$usuario' and snh_usuario = '$senha'";
   $result = mysqli_query($conexao,$sql);
   
   $count = mysqli_num_rows($result);
	
   if($count == 1) {
      $_SESSION['usuario'] = $usuario;
      
      header("Location: principal.php");
   }else {
      $error = "Seu email ou senha está incorreto";

      header("Location: index.php?error=$error");
   }
?>