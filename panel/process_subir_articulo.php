<?php 
	include("../funciones.php");

	$titulo = sanitizar("titulo");
	$institucion = sanitizar("institucion");
	$publicadora = sanitizar("publicadora");
	$autores     = sanitizar("autores");
	$fecha = sanitizar("fecha");
	$pais  = sanitizar("pais");
	$comentarios = sanitizar("comentarios");
	$link = sanitizar("link");
	$archivo = $_FILES["file"]['type'];
	$relaciones = sanitizar("relaciones");

	if ($titulo != '' and $institucion != '' and $publicadora != '' and $autores !='' and $fecha != '' and $pais != '' and $comentarios !='' and $link != '' and $archivo != '' and $relaciones != 0) {
		
		$consulta_val = consulta_val("SELECT null FROM articulos WHERE titulo = '$titulo'");
		if ($consulta_val == 0) {
			$consulta = consulta_gen("INSERT INTO articulos(titulo,institucion,publicadora,autores,fecha,pais,comentario,link) values('$titulo','$institucion','$publicadora','$autores','$fecha','$pais','$comentarios','$link')");
				$resultado = @move_uploaded_file($_FILES['file']["tmp_name"], "../articulos/$titulo.pdf");
				if ($resultado) {
					
					echo $id_articulo = consulta_txt("SELECT id_articulo FROM articulos WHERE $titulo = '$titulo'","id_articulo");

				}
				else{
					echo "mens_tres";
					//echo "La fotografia no pudo subirse tendra que subirla aparte";
				}
			}
		else{
			echo "mens_dos";
			//echo "El articulo ya ha sido registrado anteriormente";
		}
		

	}
	else{
		echo "mens_uno";
		//echo "No dejar campos vacios";
	}
		
	

	/*
	$resultado = @move_uploaded_file($_FILES['file']["tmp_name"], "nn.pdf");
	if ($resultado) {
	}
	else{
		echo "La fotografia no pudo subirse tendra que subirla aparte";
	}*/
?>