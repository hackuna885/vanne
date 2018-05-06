<?php 


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$colonia = $_POST['coloniaAuto'];


if (isset($_POST['coloniaAuto']) && !empty($_POST['coloniaAuto'])) {

echo '
<select name="txtCP">
';


	$con = new SQLite3("../data/catalogos.db");
	$cs = $con -> query("SELECT d_codigo, COUNT(d_codigo) as cResult FROM CP_Estado WHERE d_asenta = '$colonia' GROUP BY d_codigo;");


	while ($resul = $cs -> fetchArray()){

			$cp = $resul['d_codigo'];
			$cuanto = $resul['cResult'];

					echo '<option value="'.$cp.'">'.$cp.'</option>';

			}

echo '</select>';

$con -> close();


}else{
	echo '

	<input name="txtCP" placeholder="Cod. Post." type="text" id="codigoAuto" size="5" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" autocomplete="on"/>


	';
}




 ?>