<?php include("../funciones.php");$id_subapartado_js=sanitizar_get("id_subapartado_js") ?>
<table class="table">
	<thead>
		<tr>
			<th>Articulo</th>
			<th>Detalles</th>
			<th>Año</th>
			<th>Link</th>
			<th>##</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$consulta = mysqli_query($q_sec,"SELECT * FROM articulos WHERE id_subapartado = '$id_subapartado_js' ORDER by id_articulo DESC");
			while ($array = mysqli_fetch_array($consulta)) {
				$titulo = $array["titulo"];
				$comentarios = $array["comentario"];
				$fecha = $array["fecha"];
				$link  = $array["link"];

				?>
				<tr>
					<td><?php echo $titulo ?></td>
					<td><?php echo $comentarios ?></td>
					<td><?php echo $fecha ?></td>
					<td><?php echo $link ?></td>
					<td><a href="articulos/<?php echo $titulo ?>.pdf" target="_blank">Click</a></td>
					<td></td>
				</tr>
				<?php
			}
		?>
	</tbody>
</table>