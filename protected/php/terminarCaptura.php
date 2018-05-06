<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

$_SESSION['nombreLider'] = "";
$_SESSION['seccLider'] = "";

echo "<script> alert('Captura Terminada!'); </script>";
echo "<script> window.location='../lideres/capturas.aspx'; </script>";


 ?>