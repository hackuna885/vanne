<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();

$fechaRCap = date("d-m-Y g:i:s a");
$idUsrCap = "hackuna";





if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtAPaterno']) && !empty($_POST['txtAPaterno'])) {


	$txtLugar = "";
	$txtSeccion = "";
	$txtCalle = "";
	$txtNInt = "";
	$txtNExt = "";
	$txtColonia = "";
	$txtCP = "";
	$txtHora = "";
	$txtFecha = "";
	$txtNombre = "";
	$txtAPaterno = "";
	$txtAMaterno = "";
	$txtTelefono = "";
	$txtCorreo = "";
	$txtVinculo = "";


	$txtLugar = mb_strtoupper($_POST['txtLugar'], 'UTF-8');
	$txtSeccion = $_POST['txtSeccion'];
	$txtCalle = mb_strtoupper($_POST['txtCalle'], 'UTF-8');
	$txtNInt = mb_strtoupper($_POST['txtNInt'], 'UTF-8');
	$txtNExt = mb_strtoupper($_POST['txtNExt'], 'UTF-8');
	$txtColonia = mb_strtoupper($_POST['txtColonia'], 'UTF-8');
	$txtCP = $_POST['txtCP'];
	$txtHora = $_POST['txtHora'];
	$txtFecha = $_POST['txtFecha'];
	$txtNombre = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
	$txtAPaterno = mb_strtoupper($_POST['txtAPaterno'], 'UTF-8');
	$txtAMaterno = mb_strtoupper($_POST['txtAMaterno'], 'UTF-8');
	$txtTelefono = $_POST['txtTelefono'];
	$txtCorreo = $_POST['txtCorreo'];
	$txtVinculo = mb_strtoupper($_POST['txtVinculo'], 'UTF-8');

	$_SESSION['nombreLider'] = $txtNombre.' '.$txtAPaterno.' '.$txtAMaterno;
	$_SESSION['seccLider'] = $txtSeccion;

	
	$con = new SQLite3("../data/datos.db") or die("Problemas para conectar!");




	$cs = $con -> query("INSERT INTO capAltaLider (lugar_capAltaL,seccion_capAltaL,calle_capAltaL,nInt_capAltaL,nExt_capAltaL,colonia_capAltaL,cp_capAltaL,hora_capAltaL,fecha_capAltaL,nombre_capAltaL,aPaterno_capAltaL,aMaterno_capAltaL,tel_capAltaL,correo_capAltaL,vinculo_capAltaL,fechaRCap_capAltaL,idCap_capAltaL) VALUES ('$txtLugar','$txtSeccion','$txtCalle','$txtNInt','$txtNExt','$txtColonia','$txtCP','$txtHora','$txtFecha','$txtNombre','$txtAPaterno','$txtAMaterno','$txtTelefono','$txtCorreo','$txtVinculo','$fechaRCap','$idUsrCap')");
	

	$con -> close();

	echo "<script> window.location='../../invitados/capturas.aspx';</script>";



	
}else{
	echo "<script> alert('Faltan Datos!');</script>";
	echo "<script> window.location='../../lideres/capturas.aspx';</script>";
}


 ?>