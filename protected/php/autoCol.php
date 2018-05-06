<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 2) {

	$db = new SQLite3("../data/catalogos.db");

	$cs = $db -> query("SELECT d_asenta FROM CP_Estado WHERE d_asenta LIKE '%$_GET[term]%' GROUP BY d_asenta ORDER BY d_asenta LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  strtoupper($resul['d_asenta']);
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>