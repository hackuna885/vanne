<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();
session_destroy();

echo "<script> alert('Sesión Terminada!'); </script>";
echo '

	<html>
		<head>
			<meta http-equiv="REFRESH" content="0; url=../index.php">
		</head>
		<style>
			*{
				display:none
			}
		</style>
	</html>

	';


 ?>