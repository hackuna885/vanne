<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo'])) {

	$con = new SQLite3("../protected/data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtCorreo]'");

	$correo = "";

	while ($resul = $cs -> fetchArray()) {

		$nombre = $resul['nombre'];
		$aPaterno = $resul['aPaterno'];
		$aMaterno = $resul['aMaterno'];
		$correo = $resul['correo'];
		$pwUsuario = $resul['password'];
		$clvCat = $resul['claveCat'];
		$clvCat2 = $resul['claveCat2'];
		$clvCat3 = $resul['claveCat3'];
	}
	
	if ($_POST['txtCorreo'] == $correo) {

		$_SESSION['pass'] = $pwUsuario;
		$_SESSION['clvCat'] = $clvCat;
		$_SESSION['clvCat2'] = $clvCat2;
		$_SESSION['clvCat3'] = $clvCat3;

			echo '
				<input type="password" id="txtPassword" class="inp inpPassword animated fadeInDown" onkeypress="btnFormAjax2(event)" placeholder="Password..." autofocus="autofocus"/>
				<br>
				<div class="cBotonLogin pos2" onclick="formAjax3()"" >
					<div class="txtBoton">
						ACCEDER
					</div>
				</div>
			';
		$con -> close();
		
	}else{
		echo '
		<span class="spanTexto animated zoomIn">Correo no registrado</span>
		<br>
			<div class="cBotonLogin pos2" onclick="formAjax2()"" >
					<div class="txtBoton">
						CONTINUAR
					</div>
				</div>

		';
		$con -> close();
	}
}else{
	echo'
	<span class="spanTexto animated zoomIn">Falta Correo</span>
	<br>
			<div class="cBotonLogin pos2" onclick="formAjax2()"" >
					<div class="txtBoton">
						CONTINUAR
					</div>
				</div>
	';
}

 ?>
 <html>
 	<style>
 		.btnOcultar{
 			display: none;
 		}
 	</style>
	
 </html>