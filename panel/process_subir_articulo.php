<?php 
	include("../funciones.php");
	//$categoria = sanitizar("categoria");
	//$modulo    = sanitizar("modulo");
	//$apartado  = sanitizar("apartado");
	//$subapartado = sanitizar("subapartado");

	$titulo = sanitizar("titulo");
	$institucion = sanitizar("institucion");
	$publicadora = sanitizar("publicadora");
	$autores     = sanitizar("autores");
	$fecha = sanitizar("fecha");
	$pais  = sanitizar("pais");
	$comentarios = sanitizar("comentarios");
	$link = sanitizar("link");
	$archivo = $_FILES["file"]['type'];

	if ($titulo != '' and $institucion != '' and $publicadora != '' and $autores !='' and $fecha != '' and $pais != '' and $comentarios !='' and $link != '') {
		
		if ($archivo != '') {
			$consulta_val = consulta_val("SELECT null FROM articulos WHERE titulo = '$titulo'");
			if ($consulta_val == 0) {
				/**$consulta = consulta_gen("INSERT INTO articulos(categoria,id_modulo,id_apartado,id_subapartado,titulo,institucion,fecha,pais,link,comentario) values('$categoria','$modulo','$apartado','$subapartado','$titulo','$institucion','$fecha','$pais','$comentarios','$link')");
					$resultado = @move_uploaded_file($_FILES['file']["tmp_name"], "../articulos/$titulo.pdf");
					if ($resultado) {
						echo "El articulo ha sido registrado exitosamente";
					}
					else{
						echo "La fotografia no pudo subirse tendra que subirla aparte";
					}
			}
			else{
				echo "El articulo ya ha sido registrado";
			*/}
		}
		else{
			echo "Suba un archivo o registre el link";
		}

	}
	else{
		echo "No dejar campos vacios";
	}
		
	

	/*
	$resultado = @move_uploaded_file($_FILES['file']["tmp_name"], "nn.pdf");
	if ($resultado) {
	}
	else{
		echo "La fotografia no pudo subirse tendra que subirla aparte";
	}*/
?>