<?php
require_once("cabecalho.php");
require_once("session.php");
?>
<style type="text/css">

	.welcome{
		/*border:1px solid #000;*/
		width: 98%;
		background-image: url("imagens/logo.jpg");
		background-repeat: no-repeat;
		background-position: center;
		height: 65%;
	}

	h1{
		padding-left: 24%;
		padding-top: 2%;
		font-family: titleFont;
	}

	.page-content{
		margin-top: 10px;
	}
</style>
		<main class="mdl-layout__content">
   		<div class="page-content">
   			<div class="container">
					<div class='welcome'>
					</div>
					<div class="web-info">
						<h1>Seja bem vindo ao Movie Hint</h1>
					</div>
				</div>
   		</div>
  		</main>
<?php
require_once("rodape.php");
?>