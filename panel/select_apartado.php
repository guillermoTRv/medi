<?php 
	include("../funciones.php");
	$categoria  =  sanitizar_get("categoria");
	$apartado   =  sanitizar_get("apartado");

	if ($categoria == "anatofisiologia") {	
		?> <option value="">--</option> <?php
		$consulta = mysqli_query($q_sec,"SELECT * FROM subapartados WHERE id_apartado = '$apartado'");
		while ($array = mysqli_fetch_array($consulta)) {
			$subapartado    = $array["subapartado"];
			$id_subapartado = $array["id_subapartado"];
			?>
				<option value="<?php echo $id_subapartado ?>"><?php echo $subapartado ?></option>
			<?php
		}
	}
?>