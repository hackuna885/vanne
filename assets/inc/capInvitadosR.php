<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();

$liderCap = "";
$seccCap = "";

$liderCap = $_SESSION['nombreLider'];
$seccCap = $_SESSION['seccLider'];


if (isset($_GET['idUsuario']) && !empty($_GET['idUsuario'])) {

$con = new SQLite3("../data/pupilin2.db") or die("Problemas para conectar!");

$cs = $con -> query("SELECT id,nombre,aPaterno,aMaterno,calle,numInt,numExt,colonia,codPost,secc,curp FROM nominal2012 WHERE id = '$_GET[idUsuario]';");

while($resul = $cs->fetchArray()) {
		$nombreForm = $resul['nombre'];
		$aPaternoForm = $resul['aPaterno'];
		$aMaternoForm = $resul['aMaterno'];
		$calleForm = $resul['calle'];
		$numIntForm = $resul['numInt'];
		$numExtForm = $resul['numExt'];
		$coloniaForm = $resul['colonia'];
		$codPostForm = $resul['codPost'];
		$seccForm = $resul['secc'];
		$curpForm = $resul['curp'];
	}


$con -> close();

}



?>

				<section class="container animated fadeIn">
						<header class="major">
							<h2>Paso Dos</h2>
							<p>Alta de Invitados</p>
						</header>


						<div class="alinear">
							<section class="12u 12u(narrower)">
								<form method="post" action="../protected/php/altaInvitados.php">

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtLider" placeholder="Lider" type="text" id="liderAuto" value="<?php echo $liderCap;?>" required/>
										</div>
									</div>
									
									<div class="row 50%">
										<div class="6u 12u(mobile)">
												<input name="txtClv" placeholder="Correo" type="email" class="correoX" value="<?php echo $curpForm;?>"/>
										</div>
									</div>

									

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombreI" placeholder="Nombre" type="text" autofocus value="<?php echo $nombreForm;?>" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaternoI" placeholder="Apellido Paterno" type="text" value="<?php echo $aPaternoForm;?>" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaternoI" placeholder="Apellido Materno" type="text" value="<?php echo $aMaternoForm;?>"/>
										</div>
									</div>


									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtCalle" placeholder="Calle" type="text" autocomplete="on" value="<?php echo $calleForm;?>"/>
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNInt" placeholder="# Int" type="text" autocomplete="on" value="<?php echo $numIntForm;?>"/>
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNExt" placeholder="# Ext" type="text" autocomplete="on" value="<?php echo $numExtForm;?>"/>
										</div>
									</div>

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtColonia" placeholder="Colonia" type="text" id="coloniaAuto" onfocusout="ejecutarAjax()" value="<?php echo $coloniaForm;?>"/>
										</div>

										<div class="6u 12u(mobile)">
											<span id="salidaAjax">
											<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto" size="5" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" value="<?php echo $codPostForm;?>"/>
											</span>
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefonoI" placeholder="Teléfono" type="text" size="8" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 10"/>
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreoI" placeholder="Correo" type="email" class="correoX" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtSeccionI" placeholder="Sección" type="text" id="seccAuto" size="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo $seccForm;?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Continuar" /></li>
												<li><a href="../finCapInvi/terminar.aspx" class="button">Terminar</a></li>
												<li><input type="reset" value="Limpiar" /></li>
											</ul>
										</div>
									</div>

								</form>
							</section>

						</div>	
				</section>

					</div>
				</div>