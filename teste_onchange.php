<?php
ini_set("display_errors", "on");
require_once("../conexao/conn.php");

function change(){

$conn = conectar();

$total_reg = 3998;
$max_reg = 30;
$nr_pag = $total_reg/$max_reg;

echo"<select onchange=\"OnSelectionChange(this)\">";
    for($i=1;$i<=$nr_pag;$i++){
    	echo"<option value=".$i.">".$i."</option>";
    };
     echo"</select>";

switch ($_GET['acao']) {
	case 'change':
		change();
		break;
	
};

};

?>