<?php 
	include("../funciones.php");
	$subapartado = sanitizar("subapartado");
	$id_subapartado = sanitizar("id_subapartado");

	consulta_gen("UPDATE subapartados SET subapartado = '$subapartado' WHERE id_subapartado = '$id_subapartado'");

	echo "<p style='margin-top:8px'>El cambio ha sido registrado exitosamente</p>";

?>