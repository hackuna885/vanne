<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

date_default_timezone_set('America/Mexico_City');

$fechaCap = date("Y-m-d");
$horaCap = date("G:i");


if (isset($_SESSION['pass']) && !empty($_SESSION['pass'])) {
	
}else{

	session_destroy();
	
	echo "<script> alert('No puedes ver esta Pagina!!'); </script>";
	echo "<script> window.location='../index.php'; </script>";

}

?>


<!DOCTYPE html>
<!-- Este es un diseño original de VELTOSYSTEM.COM -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Capturas</title>

	<link rel="stylesheet" href="../assets/css/animate.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/jquery-ui.css">

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui.min.js"></script>

	<script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
    <script type="text/javascript">
	function ejecutarAjax(){
		var conexion;
		var ctMinicipio = document.getElementById("coloniaAuto").value;
		var valor = "coloniaAuto="+ctMinicipio;


		if (window.XMLHttpRequest) {
			conexion = new XMLHttpRequest();
		}else{
			conexion = new ActiveXObject("Microsoft.XMLHTTP");
		}

		conexion.onreadystatechange=function(){
			if (conexion.readyState==4 && conexion.status==200) {
				document.getElementById("salidaAjax").innerHTML = conexion.responseText;
			}
		}

		conexion.open("POST","../protected/php/variable.php",true);
		conexion.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		conexion.send(valor);

	}

	</script>

    
</head>