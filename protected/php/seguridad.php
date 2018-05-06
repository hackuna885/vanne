<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_SESSION['pass']) && !empty($_SESSION['pass'])) {
	
}else{

	session_destroy();
	
	echo "<script> alert('No puedes ver esta Pagina!!'); </script>";
	echo "<script> window.location='../../index.php'; </script>";

}

 ?>