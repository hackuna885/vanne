<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 2) {

	$db = new SQLite3("../data/datos.db");

	$cs = $db -> query("SELECT (nombre_CapInvi||' '||aPaterno_CapInvi||' '||aMaterno_CapInvi) AS nombreInvi FROM capInvitados WHERE nombreInvi LIKE '%$_GET[term]%' GROUP BY nombreInvi ORDER BY nombreInvi LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  strtoupper($resul['nombreInvi']);
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>