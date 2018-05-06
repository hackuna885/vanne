<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
session_start();

$_SESSION['idLider'] = $_GET['idUsuario'];

	$db = new SQLite3("../data/datos.db");

	$cs = $db -> query("SELECT * FROM capAltaLider WHERE id = '$_GET[idUsuario]';");

	while($resul = $cs->fetchArray()) {
		$lugar_capAltaL = $resul['lugar_capAltaL'];
		$seccion_capAltaL = $resul['seccion_capAltaL'];
		$calle_capAltaL = $resul['calle_capAltaL'];
		$nInt_capAltaL = $resul['nInt_capAltaL'];
		$nExt_capAltaL = $resul['nExt_capAltaL'];
		$colonia_capAltaL = $resul['colonia_capAltaL'];
		$cp_capAltaL = $resul['cp_capAltaL'];
		$hora_capAltaL = $resul['hora_capAltaL'];
		$fecha_capAltaL = $resul['fecha_capAltaL'];
		$nombre_capAltaL = $resul['nombre_capAltaL'];
		$aPaterno_capAltaL = $resul['aPaterno_capAltaL'];
		$aMaterno_capAltaL = $resul['aMaterno_capAltaL'];
		$tel_capAltaL = $resul['tel_capAltaL'];
		$correo_capAltaL = $resul['correo_capAltaL'];
		$vinculo_capAltaL = $resul['vinculo_capAltaL'];
	}

	$db -> close();

 ?>
				<section class="container animated fadeIn">
						<header class="major">
							<h2>Editar</h2>
							<p>Datos del Lider</p>
						</header>


						<div class="alinear">
							<section class="12u 12u(narrower)">
								<form method="post" action="../protected/php/actuaCapLider.php">

									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtLugar" placeholder="Lugar" type="text" autocomplete="on" value="<?php echo $lugar_capAltaL; ?>" autofocus/>
										</div>
										<div class="4u 12u(mobile)">
											<input name="txtSeccion" placeholder="Sección" type="text" id="seccAuto" size="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" title="Sección. De la 3723 - 3822" value="<?php echo $seccion_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtCalle" placeholder="Calle" type="text" autocomplete="on" value="<?php echo $calle_capAltaL; ?>" />
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNInt" placeholder="# Int" type="text" autocomplete="on" value="<?php echo $nInt_capAltaL; ?>" />
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNExt" placeholder="# Ext" type="text" autocomplete="on" value="<?php echo $nExt_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtColonia" placeholder="Colonia" type="text" id="coloniaAuto" onfocusout="ejecutarAjax()" value="<?php echo $colonia_capAltaL; ?>" />
										</div>

										<div class="6u 12u(mobile)">
											<span id="salidaAjax">
											<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto" size="5" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" value="<?php echo $cp_capAltaL; ?>" />
											</span>
										</div>
									</div>

									<div class="row 50%">
										<div class="4u 6u(mobile)">
											<input name="txtHora" placeholder="Hora" type="time" value="<?php echo $hora_capAltaL;?>" autocomplete="on"/>
										</div>
										<div class="8u 6u(mobile)">
											<input name="txtFecha" placeholder="Fecha" type="date" value="<?php echo $fecha_capAltaL;?>"  autocomplete="on"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombre" placeholder="Nombre" type="text" autocomplete="on" required value="<?php echo $nombre_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaterno" placeholder="Apellido Paterno" type="text" autocomplete="on" required value="<?php echo $aPaterno_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaterno" placeholder="Apellido Materno" type="text" autocomplete="on" value="<?php echo $aMaterno_capAltaL; ?>" />
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefono" placeholder="Teléfono" type="text" size="10" minlength=="8" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 10" autocomplete="on" value="<?php echo $tel_capAltaL; ?>" />
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreo" placeholder="Correo" type="email" class="correoX" autocomplete="on" value="<?php echo $correo_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtVinculo" placeholder="Vinculo Político" type="text" autocomplete="on" value="<?php echo $vinculo_capAltaL; ?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Actualizar" /></li>
												<li><a href="../busLideres/busqueda.aspx" class="button">Cancelar</a></li>
											</ul>
										</div>
									</div>

								</form>
							</section>

						</div>	
				</section>

					</div>
				</div>