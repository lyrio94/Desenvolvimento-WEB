<?php
require_once("cabecalho.php");

if(isset($_GET["m"])){
	$m = $_GET["m"];
}

print "<input type='hidden' id='m' value='$m'>";
?>
<style type="text/css">
	.title{
		padding-left: 45%;
		padding-bottom: 50px;
	}
</style>
<div class="container">
	<div class="container-form col-md-6 col-md-offset-3">
		<h3 class="title">Login</h3>
		<form class="form-horizontal" id="formLogin" name="formLogin" method="post" action="un_login.php">
		  	<div class="form-group">
		   	<label for="email" class="col-sm-2 control-label">Email</label>
		    	<div class="col-sm-10">
		      	<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<label for="senha" class="col-sm-2 control-label">Senha</label>
		    	<div class="col-sm-10">
		      	<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<div class="col-sm-offset-5 col-sm-6">
		      	<button type="submit" class="btn btn-default">Entrar</button>
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<div class="col-sm-offset-3 col-sm-6">
		      	<a href="cadastro.php">Não está cadastrado? Cadastre-se aqui</a>
		    	</div>
		  	</div>
		</form>
	</div>
</div>
<?php
require_once("rodape.php");
?>
<script type="text/javascript">

$(document).ready(function(){

	if($("#m").val() != ""){

		$("<div>").addClass("alert alert-success").attr("role","alert").append(
			$("<a>").attr({"href":"#","class":"alert-link"}).append(
				$("<span>").addClass("message").append("Cadastrado com sucesso")
			)
		).insertAfter("h3");

	}

	// vAlert($(".alert-link").data("alerta"));

});