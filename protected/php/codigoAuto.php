<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 2) {

	$db = new SQLite3("../data/catalogos.db");

	$cs = $db -> query("SELECT d_codigo FROM CP_Estado WHERE d_codigo LIKE '%$_GET[term]%' ORDER BY d_codigo LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  strtoupper($resul['d_codigo']);
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>