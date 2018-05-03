<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();
session_destroy();

echo "<script> alert('Captura Terminada!'); </script>";
echo "<script> window.location='../../lideres/capturas.aspx'; </script>";


 ?>