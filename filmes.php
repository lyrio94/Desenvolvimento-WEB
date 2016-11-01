<?php
require_once("cabecalho.php");
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

$conexao = conectar();

$g = $_GET["g"];
// print $g;
// die();

$sql = "
      select 
         id_filme, 
         nm_filme, 
         date_format(dt_lmt_filme,'%d/%m/%Y') as dt_filme, 
         genero_id_genero as genero, 
         nm_ft_filme 
      from 
         filme
      where
         genero_id_genero = $g
      ";
$stmt = mysqli_query($conexao,$sql);
?>
<!-- Thumbnails para os filmes do site -->
<div class="container">
   <div class="row">
      <?php while($rs = mysqli_fetch_array($stmt)){?>
      <div class="col-md-4">
         <div class="thumbnail">
            <?php
               print "<img src='imagens/filmes/".$rs["nm_ft_filme"].".jpg' alt='...'>";
            ?>
            <div class="caption">
               <h3><?php print $rs["nm_filme"]?></h3>
               <p>Data de lancamento: <?php print $rs["dt_filme"];?></p>
               <p>Avaliacao</p>
               <p><a href="detalhe_filme.php?i=<?php print $rs["id_filme"];?>" class="btn btn-primary" role="button">Detalhes</a></p>
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