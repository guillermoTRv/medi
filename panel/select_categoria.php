<?php 
	include("../funciones.php");
	$categoria = sanitizar_get("categoria");
	$modulo    = sanitizar_get("modulo");

	if ($categoria == "anatofisiologia") {	
		?> <option value="">--</option> <?php
		$consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$modulo'");
		while ($array = mysqli_fetch_array($consulta)) {
			$apartado    = $array["apartado"];
			$id_apartado = $array["id_apartado"];
			?>
				<option value="<?php echo $id_apartado ?>"><?php echo $apartado ?></option>
			<?php
		}
	}
	if ($categoria == "clinica") {
		echo "string";
	}
?>

