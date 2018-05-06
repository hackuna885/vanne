<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0">
	<title>Sistema de Capturas</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->
	<link rel="stylesheet" href="assets/css/animate.css">

<!-- jQuery -->
<?php include("assets/inc/libreriasAnima.php"); ?>
<!-- jQuery -->

	<!-- script de ajax -->
	<script type="text/javascript" src="assets/js/ajax/ajax.js"></script>
	<script type="text/javascript" src="assets/js/polyfill.min.js"></script>
	<!-- script de ajax -->

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="animated fadeIn">

	<div class="c1">
		<h1 class="titulo animated bounceInDown">REGISTROS</h1>
		<div class="c2">
			
			<div class="cLogo animated fadeInLeft">
					<div class="logo"></div>
			</div>



			<div class="cLogin animated flipInX">

				<div class="c2Titulo">INICIO</div>

				<div class="c2Form">
					<form method="post" onSubmit="formAjax2(); return false">
						<!-- <input type="email" id="txtCorreo" class="inp inpNombre" onkeypress="btnFormAjax(event)" placeholder="Correo..." required/> -->
						<input type="email" id="txtCorreo" class="inp inpNombre"  placeholder="Correo..." pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
						<br>
						<div id="midiv"></div>
					</form>
				</div>


				<!-- <div class="cBtnRegistro">
						<a href="aviso/msPriva.aspx">
							<div class="btnRegistro"></div>
							<div class="txtBtnReg">
								Registro
							</div>
						</a>
				</div> -->

			</div>

			<div class="cBotonLogin btnOcultar animated fadeInRight" onclick="formAjax2()">
					<div class="txtBoton">
						CONTINUAR
					</div>
			</div>


		</div>
	</div>

</body>
</html>