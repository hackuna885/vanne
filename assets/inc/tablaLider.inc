<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
session_start();


	$dase = new SQLite3("../data/datos.db");

	$cs = $dase -> query("SELECT id,nombre_capAltaL||' '||aPaterno_capAltaL||' '||aMaterno_capAltaL AS nombreLider, calle_capAltaL||' #'||nInt_capAltaL||' COL. '||colonia_capAltaL AS direccLider, tel_capAltaL, seccion_capAltaL FROM capAltaLider ORDER BY fechaRCap_capAltaL DESC LIMIT 7;");

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
		$nombreTab = $resul['nombreLider'];
		$dirTab = $resul['direccLider'];
		$telTab = $resul['tel_capAltaL'];
		$seccTab = $resul['seccion_capAltaL'];

	  echo '

									<tr>
										<td><a href="../editLider/mod.aspx?idUsuario='.$idTab.'">'.$nombreTab.'</a></td>
										<td>'.$dirTab.'</td>
										<td>'.$telTab.'</td>
										<td>'.$seccTab.'</td>
										<td><a href="../editLider/mod.aspx?idUsuario='.$idTab.'">Editar</a></td>
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


				
									
								