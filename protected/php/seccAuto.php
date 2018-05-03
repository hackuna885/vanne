<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 2) {

	$db = new SQLite3("../data/catalogos.db");

	$cs = $db -> query("SELECT catSeccion FROM catSecciones WHERE catSeccion LIKE '%$_GET[term]%' ORDER BY catSeccion LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  strtoupper($resul['catSeccion']);
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>