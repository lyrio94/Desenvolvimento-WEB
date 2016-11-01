<?php
require_once("cabecalho.php");
?>
<style type="text/css">
	.title{
		padding-left: 42%;
		padding-bottom: 50px;
	}
</style>
<div class="container">
	<div class="container-form col-md-6 col-md-offset-3">
		<h3 class="title">Cadastro</h3>
		<form class="form-horizontal" name="formCadastro" id="formCadastro" method="post" action="un_cadastro.php">
			<div class="form-group">
		   	<label for="nome" class="col-sm-2 control-label">Nome</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Primeiro Nome">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<label for="sobrenome" class="col-sm-2 control-label">Sobrenome</label>
		    	<div class="col-sm-10">
		      	<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<label for="email" class="col-sm-2 control-label">Email</label>
		    	<div class="col-sm-10">
		      	<input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<label for="senha" class="col-sm-2 control-label">Senha</label>
		    	<div class="col-sm-10">
		      	<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<label for="confirma_senha" class="col-sm-2 control-label">Confirmar senha</label>
		    	<div class="col-sm-10">
		      	<input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Password">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	<div class="col-sm-offset-5 col-sm-6">
		      	<button type="submit" class="btn btn-default">Cadastrar</button>
		    	</div>
		  	</div>
		</form>
	</div>
</div>
<?php
require_once("rodape.php");
?>
<script type="text/javascript">
$("form").submit(function(evt){

	if ($("#nome").val() == ""){
		evt.preventDefault();
		message("Preencher o nome");
	}
	if ($("#sobrenome").val() == ""){
		evt.preventDefault();
		message("Preencher o sobrenome");
	}
	if ($("#email").val() == ""){
		evt.preventDefault();
		message("Preencher o email");
	}
	if ($("#senha").val() == ""){
		evt.preventDefault();
		message("Preencher a senha");
	}
	if ($("#confirma_senha").val() == "") {
		evt.preventDefault();
		message("Confirme a senha");
	};	
});

var message = function(obj){

	var mensagem = obj;

	$("<div>").addClass("alert alert-danger").attr("role","alert").append(
		$("<a>").attr({"href":"#","class":"alert-link"}).append(
			$("<span>").addClass("message").append(mensagem)
		)
	).insertAfter("h3");
}

</script>