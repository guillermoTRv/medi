<?php 
	include("../funciones.php");
	$id_subapartado = sanitizar("id_subapartado");
	$recopilador  = $_POST["recopilador"];
	$presentacion = $_POST["presentacion"];
	$temporal = $_POST["temporal"];

	$update = consulta_gen("INSERT INTO vitacora_subapartado(id_subapartado,texto_borrador,texto_limpio,temporal,fecha) VALUES('$id_subapartado','$recopilador','$presentacion','$temporal','$fecha_hora')");

	?>
		<div class="alert alert-info alert-dismissible" style="margin-top:10px;margin-bottom:-10px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Vitacora registrada exitosamente
        </div>
	<?php
?>