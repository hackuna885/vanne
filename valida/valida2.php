<?php 

session_start();

if (isset($_POST['txtPassword']) && !empty($_POST['txtPassword'])) {
	
	if ($_SESSION['pass'] == md5($_POST['txtPassword'])) {
		echo '
			
			<html>
				<head>
					<meta http-equiv="REFRESH" content="0; url=lideres/capturas.aspx">
				</head>
			</html>

		';
	}else{
		echo '<span class="spanTexto">Password Incorrecto</span>';
	}
}else{

	echo '
		<input type="password" id="txtPassword" class="inp inpPassword" onkeypress="btnFormAjax2(event)" placeholder="Password..."/>
		<br>
		<span class="spanTexto posdisSpan">Falta Password</span>
	';

}

 ?>