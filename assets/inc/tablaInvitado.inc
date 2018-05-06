<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
session_start();


	$dase = new SQLite3("../data/datos.db");

	$cs = $dase -> query("SELECT id,nombre_CapInvi||' '||aPaterno_CapInvi||' '||aMaterno_CapInvi AS nombreInvitado, calle_CapInvi||' #'||nInt_CapInvi||' COL. '||colonia_CapInvi AS direccInvitado, telefono_CapInvi, seccion_CapInvi FROM capInvitados ORDER BY fechaR_CapInvi DESC LIMIT 7;");

	echo '
				<section class="container animated fadeIn">
					<article id="content">
						<div class="row 50%">
							<div class="12u 12u(mobile)">

								<table class="default">
									<tr>
										<td>Nombre:</td>
										<td>Dirección:</td>
										<td>Teléfono:</td>
										<td>Sección:</td>
										<td></td>
									</tr>
	';
		    
	while($resul = $cs->fetchArray()) {
		$idTab = $resul['id'];
		$nombreTab = $resul['nombreInvitado'];
		$dirTab = $resul['direccInvitado'];
		$telTab = $resul['telefono_CapInvi'];
		$seccTab = $resul['seccion_CapInvi'];

	  echo '

									<tr>
										<td><a href="../editInvitado/mod.aspx?idUsuario='.$idTab.'">'.$nombreTab.'</a></td>
										<td>'.$dirTab.'</td>
										<td>'.$telTab.'</td>
										<td>'.$seccTab.'</td>
										<td><a href="../editInvitado/mod.aspx?idUsuario='.$idTab.'">Editar</a></td>
									</tr>

	  ';
	}

	echo '

								</table>
					</div>
				</div>
			</article>
		</section>

							</div>
						</div>
	';

	$dase -> close();



 ?>


				
									
								