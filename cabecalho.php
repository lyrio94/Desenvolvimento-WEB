<doctype! html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>MovieHint</title>
	<link rel="stylesheet" href="../library/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css" />
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.min.css" />
	<style>

		@font-face{
			font-family: titleFont;
			src: url("../library/fonts/Shrikhand/Shrikhand-Regular.ttf");
		}

		.nav{
			padding-top: 15px;
			padding-bottom: 5px;
			/*border-bottom: 1px solid #5a5a5a;*/
			background-color: #fff;
			position: fixed;
			width: 100%;
			box-shadow: 2px 3px 30px #5A5A5A;
			z-index: 999999;
		}

		.nav a {
			color: #5a5a5a;
			font-size: 11px;
			font-weight: bold;
			padding: 14px 10px;
			text-transform: uppercase;
		}

		.nav li {
			display: inline;
		}

		#logo {
			width: 30px;
		}

		.principal {
			padding-top: 80px;
		}
	</style>
</head>
<body>
	<div class="nav">
		<!-- <div class="container"> -->
			<ul class="pull-left">
				<!-- <li><img src="imagens/logo.jpg" alt="logo" id="logo"></li> -->
				<li><a href="principal.php">Home</a></li>
				<li><a href="generos.php">Filmes</a></li>
			</ul>
			<ul class="pull-right">
				<li><a href="perfil.php"><span class="glyphicon glyphicon-user" aria-hidden="true" title="Editar perfil"></span></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true" title="Logout" id="logout"></span></a></li>
	   	</ul>
		<!-- </div> -->
	</div>
	<div class="principal">