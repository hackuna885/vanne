<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();

$fechaRCap = date("d-m-Y g:i:s a");
$idUsrCap = $_SESSION['correo'];





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

	$_SESSION['nombreLider'] = "";
	$_SESSION['seccLider'] = "";

	
	$con = new SQLite3("../data/datos.db") or die("Problemas para conectar!");




	$cs = $con -> query("UPDATE capAltaLider SET lugar_capAltaL='$txtLugar',seccion_capAltaL='$txtSeccion',calle_capAltaL='$txtCalle',nInt_capAltaL='$txtNInt',nExt_capAltaL='$txtNExt',colonia_capAltaL='$txtColonia',cp_capAltaL='$txtCP',hora_capAltaL='$txtHora',fecha_capAltaL='$txtFecha',nombre_capAltaL='$txtNombre',aPaterno_capAltaL='$txtAPaterno',aMaterno_capAltaL='$txtAMaterno',tel_capAltaL='$txtTelefono',correo_capAltaL='$txtCorreo',vinculo_capAltaL='$txtVinculo',fechaRCap_capAltaL='$fechaRCap',idCap_capAltaL='$idUsrCap' WHERE id = '$_SESSION[idLider]'");
	

	$con -> close();
	echo "<script> alert('Datos Actualizados!');</script>";
	echo "<script> window.location='../../busLideres/busqueda.aspx';</script>";



	
}else{
	echo "<script> alert('Faltan Datos!');</script>";
	echo "<script> window.location='../../busLideres/busqueda.aspx';</script>";
}


 ?>