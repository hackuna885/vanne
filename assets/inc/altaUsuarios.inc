				<section class="container animated fadeIn">
						<header class="major">
							<h2>Usuarios</h2>
							<p>Alta de Usuarios</p>
						</header>


						<div class="alinear">
							<section class="12u 12u(narrower)">
								<form method="post" action="../protected/php/insertUsuario.php">


									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtNombre" placeholder="Nombre" type="text" autocomplete="on" required autofocus/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAPaterno" placeholder="Apellido Paterno" type="text" autocomplete="on" required/>
										</div>
									</div>

									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="txtAMaterno" placeholder="Apellido Materno" type="text" autocomplete="on"/>
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
											<input name="txtPassUsuario" placeholder="Password" type="password" autocomplete="on"/>
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