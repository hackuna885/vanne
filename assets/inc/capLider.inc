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
											<input name="txtLugar" placeholder="Lugar" type="text" autofocus/>
										</div>
										<div class="4u 12u(mobile)">
											<input name="txtSeccion" placeholder="Sección" type="text" id="seccAuto" maxlength="4" minlength="4" pattern="[3723-3822]{4}" title="Sección. De la 3723 - 3822"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="8u 12u(mobile)">
											<input name="txtCalle" placeholder="Calle" type="text" />
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNInt" placeholder="# Int" type="text" />
										</div>
										<div class="2u 6u(mobile)">
											<input name="txtNExt" placeholder="# Ext" type="text" />
										</div>
									</div>

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtColonia" placeholder="Colonia" type="text" id="coloniaAuto"/>
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto"/>
										</div>
									</div>

									<div class="row 50%">
										<div class="4u 6u(mobile)">
											<input name="txtHora" placeholder="Hora" type="time" value="<?php echo $horaCap;?>"/>
										</div>
										<div class="8u 6u(mobile)">
											<input name="txtFecha" placeholder="Fecha" type="date" value="<?php echo $fechaCap;?>" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombre" placeholder="Nombre" type="text" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaterno" placeholder="Apellido Paterno" type="text" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaterno" placeholder="Apellido Materno" type="text" />
										</div>
									</div>

									

									<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="txtTelefono" placeholder="Teléfono" type="text" maxlength="13" minlength="8" pattern="[0-9]{8,13}" title="Número de Teléfono. Tamaño mínimo: 8. Tamaño máximo: 13"/>
										</div>

										<div class="6u 12u(mobile)">
											<input name="txtCorreo" placeholder="Correo" type="email" class="correoX" />
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtVinculo" placeholder="Vinculo Político" type="text" />
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