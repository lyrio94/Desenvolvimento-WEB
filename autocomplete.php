<?php
require_once("../conexao/conn.php");

	$conn = conectar();

    $nome = strtolower($_POST["term"]);
    
    $sql ="
	SELECT ID_JOGO, UPPER(NM_JOGOS) AS NM_JOGOS
	FROM TB_JOGOS
	WHERE UPPER(NM_JOGOS) LIKE UPPER('%$nome%')
	";
    
	$statement = mysqli_query($conn,$sql);
	$return = array();

	while ($linha = mysqli_fetch_array($statement)) {
    array_push($return,array('label'=>$linha['NM_JOGOS'],'value'=>$linha['NM_JOGOS']));
	};	
	

echo(json_encode($return));
mysqli_close($conn);

?>

