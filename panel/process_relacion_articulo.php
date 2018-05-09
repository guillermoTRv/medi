<?php 
	include("../funciones.php");
	$id_articulo = sanitizar("id_articulo");
	$categoria = sanitizar("categoria");
	$id_modulo = sanitizar("id_modulo");
	$id_apartado = sanitizar("id_apartado");
	$id_subapartado = sanitizar("id_subapartado");

	$insertar = consulta_gen("INSERT INTO relacion_articulos(id_articulo,categoria,id_modulo,id_apartado,id_subapartado) values('$id_articulo','$categoria','$id_modulo','$id_apartado','$id_subapartado')");
	echo "Relacion correcta $id_apartado";

?>