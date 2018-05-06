<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();

$fechaRCap = date("d-m-Y g:i:s a");
$idUsrCap = $_SESSION['correo'];





if (isset($_POST['txtLider']) && !empty($_POST['txtLider']) &&
	isset($_POST['txtNombreI']) && !empty($_POST['txtNombreI']) &&
	isset($_POST['txtAPaternoI']) && !empty($_POST['txtAPaternoI'])) {


	$txtLider = "";
	$txtNombreI = "";
	$txtAPaternoI = "";
	$txtAMaternoI = "";
	$txtTelefonoI = "";
	$txtCorreoI = "";
	$txtSeccionI = "";


	$txtLider = mb_strtoupper($_POST['txtLider'], 'UTF-8');
	$txtNombreI = mb_strtoupper($_POST['txtNombreI'], 'UTF-8');
	$txtAPaternoI = mb_strtoupper($_POST['txtAPaternoI'], 'UTF-8');
	$txtAMaternoI = mb_strtoupper($_POST['txtAMaternoI'], 'UTF-8');
	$txtCalle = mb_strtoupper($_POST['txtCalle'], 'UTF-8');
	$txtNInt = mb_strtoupper($_POST['txtNInt'], 'UTF-8');
	$txtNExt = mb_strtoupper($_POST['txtNExt'], 'UTF-8');
	$txtColonia = mb_strtoupper($_POST['txtColonia'], 'UTF-8');
	$txtCP = $_POST['txtCP'];
	$txtTelefonoI = $_POST['txtTelefonoI'];
	$txtCorreoI = $_POST['txtCorreoI'];
	$txtSeccionI = $_POST['txtSeccionI'];

	
	$con = new SQLite3("../data/datos.db") or die("Problemas para conectar!");




	$cs = $con -> query("UPDATE capInvitados SET lider_CapInvi='$txtLider',nombre_CapInvi='$txtNombreI',aPaterno_CapInvi='$txtAPaternoI',aMaterno_CapInvi='$txtAMaternoI',calle_CapInvi='$txtCalle',nInt_CapInvi='$txtNInt',nExt_CapInvi='$txtNExt',colonia_CapInvi='$txtColonia',cp_CapInvi='$txtCP',telefono_CapInvi='$txtTelefonoI',correo_CapInvi='$txtCorreoI',seccion_CapInvi='$txtSeccionI',fechaR_CapInvi='$fechaRCap',idUsr_CapInvi='$idUsrCap' WHERE id = '$_SESSION[idLider]'");
	

	$con -> close();
	echo "<script> alert('Datos Actualizados!');</script>";
	echo "<script> window.location='../../busInvitados/busqueda.aspx';</script>";



	
}else{
	echo "<script> alert('Faltan Datos!');</script>";
	echo "<script> window.location='../../busInvitados/busqueda.aspx';</script>";
}


 ?>