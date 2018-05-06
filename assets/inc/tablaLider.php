<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
session_start();

if (empty($_GET['pag'])) {
	$pag = 1;
}else{
	$pag = $_GET['pag'];
}


	$con = new SQLite3("../data/datos.db") or die("Problemas para conectar!");




	$cs = $con -> query("SELECT COUNT(id) AS noRegs,nombre_capAltaL||' '||aPaterno_capAltaL||' '||aMaterno_capAltaL AS nombreLider FROM capAltaLider WHERE nombreLider LIKE '%$_POST[txtBusqueda]%'");

	while ($resul = $cs -> fetchArray()) {

		$noRegs = $resul['noRegs']; //Numero de Registros dentro de una tabla
	}

	$cpm = 10; //Esta es la cantidad de filas para mostrar
	$ultimapag = ceil($noRegs/$cpm); //Numero de Registro entre Numero de Filas nos da, el numero de Hojas
	$pag = (int)$pag; //Convierte el valo de Pagina en Numerico

	if ($pag < 0) {
		$pag = 1;
	}elseif ($pag > $ultimapag){
		$pag = $ultimapag;
	}

// TABLA

	$cs2 = $con -> query("SELECT id,nombre_capAltaL||' '||aPaterno_capAltaL||' '||aMaterno_capAltaL AS nombreLider, calle_capAltaL||' #'||nInt_capAltaL||' COL. '||colonia_capAltaL AS direccLider, tel_capAltaL, seccion_capAltaL FROM capAltaLider WHERE nombreLider LIKE '%$_POST[txtBusqueda]%' ORDER BY seccion_capAltaL,nombreLider,direccLider LIMIT ($pag-1) * $cpm,$cpm;");

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
		    
	while($resul = $cs2->fetchArray()) {
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

								';
// TABLA


	$siguiente = $pag+1;
	$anterior = $pag-1;

	echo "	<br>
				<div class='paginacion'>";


	if ($pag == 1) {

		echo "<span class='button'>Anterior</span><span class='button2'>1</span>";

		for ($i=2; $i <= $ultimapag ; $i++) { 
			echo '<a class="buttonX" href="?pag='.$i.'?">'.$i.'</a>';
		}

	}

	if ($pag != 1 && $pag > 1) {
		echo '<a class="button" href="?pag='.$anterior.'?"> Anterior</a>';
	}

	for ($c=1; $c <= $ultimapag ; $c++) { 
		if ($c == $pag && $pag != 1) {
			echo "<span class='button2'>".$c."</span>";
		}elseif($pag != 1){
			echo '<a class="buttonX" href="?pag='.$c.'?">'.$c.'</a>';
		}
	}

	if ($pag < $ultimapag) {
		echo '<a class="button" href="?pag='.$siguiente.'?"> Siguiente</a>';
	}else{
		echo "<span class='button'>Siguiente</span>";
	}

	



	

	$con -> close();

	echo'
			</div>
						
				</div>
			</div>
		</article>
		</section>
							</div>
						</div>
	';







	



 ?>


				
									
								