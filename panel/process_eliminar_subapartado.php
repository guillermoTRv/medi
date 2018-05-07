<?php  
	include("../funciones.php");
	$id = sanitizar_get("id");
	consulta_gen("DELETE FROM subapartados WHERE id_subapartado = '$id'");
	echo "<p style='margin-top:8px'>El subapartado ha sido eliminado exitosamente</p>";

?>