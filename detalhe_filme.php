<?php
require_once("cabecalho.php");
ini_set("display_errors","on");
// error_reporting(0);
require_once("conexao/conn.php");
date_default_timezone_set('America/Sao_Paulo');

$conexao = conectar();

$i = $_GET["i"];
// print $i;
// die();

$local = "SET lc_time_names = 'pt_BR'";
mysqli_query($conexao,$local);

$sql = "
      select 
         id_filme, 
         nm_filme,
         nm_drt_filme as nm_diretor,
         nm_rt_filme as nm_roteirista,
         avl_filme as nota_filme,
         date_format(dt_lmt_filme,'%d de %M de %Y') as dt_filme,
         snp_filme,
         trl_filme,
         genero_id_genero as genero, 
         nm_ft_filme 
      from 
         filme
      where
         id_filme = $i
      ";
$stmt = mysqli_query($conexao,$sql);
$rs = mysqli_fetch_array($stmt);
?>
<style type="text/css">
   iframe{
      border: none;
      width: 600px;
      height: 300px;
   }
   .nota{
      margin-left: 15px;
   }
   .avaliacao{
      margin-left: 20px;
   }
   select{
      border:none;
      width: 50px;
      height: 50px;
      font-size: 20px;
   }
</style>
<div class="page-header">
   <h1><?php print $rs["nm_filme"];?><small><span class="nota">Nota: <?php print $rs["nota_filme"]."/10";?></span></small></h1>

</div>
<div class="detalhe">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Detalhes Técnicos</h3>
      </div>
      <div class="panel-body">
         <p>Data de lançamento: <?php print $rs["dt_filme"];?></p>
         <p>Direção: <?php print $rs["nm_diretor"];?></p>
         <p>Roteiro: <?php print $rs["nm_roteirista"];?></p>
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Sinopse</h3>
      </div>
      <div class="panel-body">
         <?php print utf8_encode($rs["snp_filme"]);?>
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Trailer</h3>
      </div>
      <div class="panel-body">
         <!-- 16:9 aspect ratio -->
         <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php print $rs["trl_filme"]?>?rel=0"></iframe>
         </div>
      </div>
      <div class="avaliacao">
         <label for"nota"><h3>Sua nota:</h3></label>
         <select id="nota">
            <?php
               for($i = 0;$i <= 10;$i++){
                  print "<option>".$i."</option>";
               }
            ?>
         </select>
      </div>
   </div>
</div>
<?php
require_once("rodape.php");
?>