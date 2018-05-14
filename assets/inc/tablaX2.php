<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
session_start();




if (isset($_POST['txtBusqueda']) && !empty($_POST['txtBusqueda'])) {
	$_SESSION['nombreX'] = $_POST['txtBusqueda'];
	$nombreX = mb_strtoupper($_SESSION['nombreX'] , 'UTF-8');
}else{
	$nombreX = mb_strtoupper($_SESSION['nombreX'] , 'UTF-8');
}




if (empty($_GET['pag'])) {
	$pag = 1;
}else{
	$pag = $_GET['pag'];
}


	$con = new SQLite3("../data/pupilin2.db") or die("Problemas para conectar!");




// TABLA

	$cs2 = $con -> query("SELECT id,nombre,calle,secc,nombreC,dirC,secc FROM nominal2012 WHERE nombreC LIKE '%$nombreX%' ORDER BY secc,calle,nombre LIMIT 50;");

	echo '

				<section class="container animated fadeIn">
					<article id="content">
						<div class="row 50%">
							<div class="12u 12u(mobile)">

								<table class="default">
									<tr>
										<td>Nombre:</td>
										<td>Dirección:</td>
										<td>Sección:</td>
										<td>Lider</td>
										<td>Invitado</td>
									</tr>
	';
		    
	while($resul = $cs2->fetchArray()) {
		$idTab = $resul['id'];
		$nombreTab = $resul['nombreC'];
		$dirTab = $resul['dirC'];
		$seccTab = $resul['secc'];

	  echo '

									<tr>
										<td><a href="../editLider/mod.aspx?idUsuario='.$idTab.'">'.$nombreTab.'</a></td>
										<td>'.$dirTab.'</td>
										<td>'.$seccTab.'</td>
										<td><a href="../editLider/mod.aspx?idUsuario='.$idTab.'">Agregar</a></td>
										<td><a href="../editLider/mod.aspx?idUsuario='.$idTab.'">Agregar</a></td>
									</tr>

	  ';
	}

	echo '

								</table>

								';
// TABLA


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


				
									
								