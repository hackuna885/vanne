<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

date_default_timezone_set('America/Mexico_City');

$fechaCap = date("Y-m-d");
$horaCap = date("G:i");

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

    
</head>