<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
session_start();

$liderCap = "";
$seccCap = "";

$liderCap = $_SESSION['nombreLider'];
$seccCap = $_SESSION['seccLider'];


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
										<div class="12u 12u(mobile)">
											<input name="txtNombreI" placeholder="Nombre" type="text" autofocus required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaternoI" placeholder="Apellido Paterno" type="text" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaternoI" placeholder="Apellido Materno" type="text" />
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefonoI" placeholder="Teléfono" type="text" maxlength="13" minlength="8" pattern="[0-9]{8,13}" title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 13"/>
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreoI" placeholder="Correo" type="email" class="correoX" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtSeccionI" placeholder="Sección" type="text" id="seccAuto" value="<?php echo $seccCap;?>"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Continuar" /></li>
												<li><a href="../protected/php/terminarCaptura.php" class="button">Terminar</a></li>
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