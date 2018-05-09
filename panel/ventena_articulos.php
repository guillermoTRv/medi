<?php include("../funciones.php");$id_apartado=sanitizar_get("id_apartado") ?>
		
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
			$consulta = mysqli_query($q_sec,"SELECT * FROM relacion_articulos WHERE id_apartado = '$id_apartado' ORDER by id_articulo DESC");
			while ($array = mysqli_fetch_array($consulta)) {
				$id_articulo = $array["id_articulo"];
				$consulta_articulo = consulta_array("SELECT * FROM articulos WHERE id_articulo = '$id_articulo'");
				$titulo = $consulta_articulo["titulo"];
				$comentario = $consulta_articulo["comentario"];
				$fecha = $consulta_articulo["fecha"];
				$link = $consulta_articulo["link"];
				$pdf = utf8_encode($titulo)
				?>
				<tr>
					<td><?php echo $titulo ?></td>
					<td><?php echo $comentario ?></td>
					<td><?php echo $fecha ?></td>
					<td><a href="<?php echo $link ?>" target="_blank">Click</a></td>
					<td><a href="articulos/<?php echo $pdf ?>.pdf" target="_blank">Click</a></td>
					<td></td>
				</tr>
				<?php
			}
		?>
	</tbody>
</table>