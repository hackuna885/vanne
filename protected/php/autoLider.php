<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 2) {

	$db = new SQLite3("../data/datos.db");

	$cs = $db -> query("SELECT (nombre_capAltaL||' '||aPaterno_capAltaL||' '||aMaterno_capAltaL) AS nombreLider FROM capAltaLider WHERE nombreLider LIKE '%$_GET[term]%' GROUP BY nombreLider ORDER BY nombreLider LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  strtoupper($resul['nombreLider']);
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>