<?php 

		$nombreForm = "";
		$aPaternoForm = "";
		$aMaternoForm = "";
		$calleForm = "";
		$numIntForm = "";
		$numExtForm = "";
		$coloniaForm = "";
		$codPostForm = "";
		$seccForm = "";
		$curpForm = "";


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
							<h2>Paso Uno</h2>
							<p>Alta del Lider</p>
						</header>


						<div class="alinear">
							<section class="12u 12u(narrower)">
								<form method="post" action="../protected/php/altaCalLider.php">

									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtLugar" placeholder="Lugar" type="text" autocomplete="on" autofocus/>
										</div>
										<div class="4u 12u(mobile)">
											<input name="txtSeccion" placeholder="Sección" type="text" id="seccAuto" size="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" title="Sección. De la 3723 - 3822" value="<?php echo $seccForm; ?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtCalle" placeholder="Calle" type="text" autocomplete="on" value="<?php echo $calleForm; ?>"/>
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNInt" placeholder="# Int" type="text" autocomplete="on" value="<?php echo $numIntForm; ?>"/>
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNExt" placeholder="# Ext" type="text" autocomplete="on" value="<?php echo $numExtForm; ?>"/>
										</div>
									</div>

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtColonia" placeholder="Colonia" type="text" id="coloniaAuto" onfocusout="ejecutarAjax()" value="<?php echo $coloniaForm; ?>"/>
										</div>

										<div class="6u 12u(mobile)">
											<span id="salidaAjax">
											<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto" size="5" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" value="<?php echo $codPostForm; ?>"/>
											</span>
										</div>
									</div>

									<div class="row 50%">
										<div class="4u 6u(mobile)">
											<input name="txtHora" placeholder="Hora" type="time" value="<?php echo $horaCap;?>" autocomplete="on"/>
										</div>
										<div class="8u 6u(mobile)">
											<input name="txtFecha" placeholder="Fecha" type="date" value="<?php echo $fechaCap;?>"  autocomplete="on"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombre" placeholder="Nombre" type="text" autocomplete="on" required value="<?php echo $nombreForm; ?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaterno" placeholder="Apellido Paterno" type="text" autocomplete="on" required value="<?php echo $aPaternoForm; ?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaterno" placeholder="Apellido Materno" type="text" autocomplete="on" value="<?php echo $aMaternoForm; ?>"/>
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefono" placeholder="Teléfono" type="text" size="10" minlength=="8" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 10" autocomplete="on"/>
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreo" placeholder="Correo" type="email" class="correoX" autocomplete="on"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtVinculo" placeholder="Vinculo Político" type="text" autocomplete="on"/>
										</div>
									</div>

									<div class="oculto row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtClv" placeholder="Clave" type="text" autocomplete="on" value="<?php echo $curpForm; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Continuar" /></li>
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