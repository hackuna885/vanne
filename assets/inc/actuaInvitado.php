<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();


$_SESSION['idLider'] = $_GET['idUsuario'];

	$db = new SQLite3("../data/datos.db");

	$cs = $db -> query("SELECT * FROM capInvitados WHERE id = '$_GET[idUsuario]';");

	while($resul = $cs->fetchArray()) {
		$lider_CapInvi = $resul['lider_CapInvi'];
		$nombre_CapInvi = $resul['nombre_CapInvi'];
		$aPaterno_CapInvi = $resul['aPaterno_CapInvi'];
		$aMaterno_CapInvi = $resul['aMaterno_CapInvi'];
		$calle_CapInvi = $resul['calle_CapInvi'];
		$nInt_CapInvi = $resul['nInt_CapInvi'];
		$nExt_CapInvi = $resul['nExt_CapInvi'];
		$colonia_CapInvi = $resul['colonia_CapInvi'];
		$cp_CapInvi = $resul['cp_CapInvi'];
		$telefono_CapInvi = $resul['telefono_CapInvi'];
		$correo_CapInvi = $resul['correo_CapInvi'];
		$seccion_CapInvi = $resul['seccion_CapInvi'];
	}

	$db -> close();


?>

				<section class="container animated fadeIn">
						<header class="major">
							<h2>Editar</h2>
							<p>Datos Invitado</p>
						</header>


						<div class="alinear">
							<section class="12u 12u(narrower)">
								<form method="post" action="../protected/php/actuaCapInvitado.php">

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtLider" placeholder="Lider" type="text" id="liderAuto" value="<?php echo $lider_CapInvi;?>" required/>
										</div>
									</div>

									

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombreI" placeholder="Nombre" type="text" autofocus value="<?php echo $nombre_CapInvi;?>" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaternoI" placeholder="Apellido Paterno" type="text" value="<?php echo $aPaterno_CapInvi;?>" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaternoI" placeholder="Apellido Materno" type="text" value="<?php echo $aMaterno_CapInvi;?>" />
										</div>
									</div>


									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtCalle" placeholder="Calle" type="text" autocomplete="on" value="<?php echo $calle_CapInvi;?>"/>
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNInt" placeholder="# Int" type="text" autocomplete="on" value="<?php echo $nInt_CapInvi;?>" />
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNExt" placeholder="# Ext" type="text" autocomplete="on" value="<?php echo $nExt_CapInvi;?>" />
										</div>
									</div>

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtColonia" placeholder="Colonia" type="text" id="coloniaAuto" onfocusout="ejecutarAjax()" value="<?php echo $colonia_CapInvi;?>" />
										</div>

										<div class="6u 12u(mobile)">
											<span id="salidaAjax">
											<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto" size="5" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on" value="<?php echo $cp_CapInvi;?>" />
											</span>
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefonoI" placeholder="Teléfono" type="text" size="8" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 10" value="<?php echo $telefono_CapInvi;?>" />
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreoI" placeholder="Correo" type="email" class="correoX" value="<?php echo $correo_CapInvi;?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtSeccionI" placeholder="Sección" type="text" id="seccAuto" size="4" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo $seccion_CapInvi;?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Actualizar" /></li>
												<li><a href="../busInvitados/busqueda.aspx" class="button">Cancelar</a></li>
											</ul>
										</div>
									</div>

								</form>
							</section>

						</div>	
				</section>

					</div>
				</div>