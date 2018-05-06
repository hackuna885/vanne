<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtAPaterno']) && !empty($_POST['txtAPaterno']) &&
	isset($_POST['txtAMaterno']) && !empty($_POST['txtAMaterno']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtPassUsuario']) && !empty($_POST['txtPassUsuario'])) {

	$varNombre = mb_strtoupper($_POST['txtNombre']);
	$varAPaterno = mb_strtoupper($_POST['txtAPaterno']);
	$varAMaterno = mb_strtoupper($_POST['txtAMaterno']);
	$varTelefono = mb_strtoupper($_POST['txtTelefono']);
	$varNombreUsr = $_POST['txtCorreo'];
	$varcryptPass = md5($_POST['txtPassUsuario']);
	

	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar con DB");

	$cs1 = $con -> query("SELECT COUNT(correo) AS Cuantos FROM login WHERE correo = '$varNombreUsr'");
	while ($usuarioX = $cs1->fetchArray()) {
		$resBus = $usuarioX['Cuantos'];
	}

	if ($resBus > 0) {

		$con -> close();

		echo "<script> alert('Error Usuario Registrado!');</script>";
		echo "<script> window.location='../../registro/usuarios.aspx';</script>";

	}else{

	$cs2 = $con -> query("INSERT INTO login (nombre,aPaterno,aMaterno,telefono,correo,password) VALUES('$varNombre','$varAPaterno','$varAMaterno','$varTelefono','$varNombreUsr','$varcryptPass')");

	$con -> close();

	echo "<script> alert('Datos Insertados!'); </script>";
	echo "<script> window.location='../../registro/usuarios.aspx'; </script>";

	}
}else{
	echo "<script> alert('Faltan datos!'); </script>";
	echo "<script> window.location='../../registro/usuarios.aspx'; </script>";
}


 ?>