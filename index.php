<doctype! html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>MovieHint</title>
	<link rel="stylesheet" href="../library/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css" />
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.min.css" />
	<style type="text/css">
		body{
			padding-top: 10%;
		}
		.title{
			padding-left: 43%;
			padding-bottom: 50px;
		}
		.alert{
			width: 450px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="container-form col-md-6 col-md-offset-3">
			<h3 class="title">Login</h3>
			<div class="col-md-offset-2 alert alert-danger" role="alert">
  				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  				<span class="sr-only">Error:</span>
  				<?php print $_GET["error"];?>
			</div>
			<form class="form-horizontal" id="formLogin" name="formLogin" method="post" action="login.php">
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
</body>
</html>
<script type="text/javascript" src="../library/jquery/jquery-1.11.1.min.js"></script>
<script src="../library/bootstrap/js/bootstrap.min.js"></script>