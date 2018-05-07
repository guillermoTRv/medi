<?php 
	include("../funciones.php");
	$modulo = sanitizar_get("modulo");
	$categoria = sanitizar_get("categoria");
	$id_apartado = sanitizar_get("apartado");
	$id_subapartado = sanitizar_get("subapartado");

	if ($categoria == 'anatofisiologia') {
		if ($id_subapartado == '0') {
			?>
			<div class="relacion">
				<div>	
					<a href="" style="color:black" class="quitar_relacion"><i class="fa fa-times-circle-o"></i></a>
					<?php echo $apartado = consulta_txt("SELECT apartado FROM apartados WHERE id_apartado = '$id_apartado'","apartado"); ?>
					<div style="display: none">
						<input type="text" value='<?php echo $categoria ?>' name="categoria">
						<input type="text" value='<?php echo $id_apartado ?>' name="relacion_apartado">
						<input type="text" value='<?php echo $id_subapartado ?>' name="relacion_subapartado">
					</div>
					<br>
				</div>
			</div>
			<?php
		}
		else{
			$apartado = consulta_txt("SELECT apartado FROM apartados WHERE id_apartado = '$id_apartado'","apartado");
			$subapartado = consulta_txt("SELECT subapartado FROM subapartados WHERE id_subapartado = '$id_subapartado'","subapartado");
			?>
			<div class="relacion">
				<div>	
					<a href="" style="color:black" class="quitar_relacion"><i class="fa fa-times-circle-o"></i></a>
					<?php echo $apartado." - ".$subapartado; ?>
					<div style="display: none">
						<input type="text" value='<?php echo $categoria ?>' name="categoria">
						<input type="text" value='<?php echo $id_apartado ?>' name="relacion_apartado">
						<input type="text" value='<?php echo $id_subapartado ?>' name="relacion_subapartado">
					</div>
					<br>
				</div>
			</div>
			<?php
		}
	}

?>