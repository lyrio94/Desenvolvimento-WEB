<?php
require_once("cabecalho.php");
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

$conexao = conectar();

$sql = "select id_genero, nm_genero from genero";
$stmt = mysqli_query($conexao,$sql);

?>
<style type="text/css">
img{
   width: 200px;
}
</style>
<!-- Thumbnails para os filmes do site -->
<div class="container">
	<div class="row">
      <?php while($rs = mysqli_fetch_array($stmt)){?>
  		<div class="col-md-4">
    		<div class="thumbnail">
      		<div class="caption">
        		<h3><?php print utf8_encode($rs["nm_genero"]);?></h3>
        		<p><a href="filmes.php?g=<?php print $rs["id_genero"];?>" class="btn btn-primary" role="button">Filmes</a></p>
      		</div>
    		</div>
  		</div>
      <?php };?>
	</div>
</div>
<!-- Javascript para fazer os thumbnails -->
<?php
require_once("rodape.php");
?>
<script type="text/javascript">

</script>