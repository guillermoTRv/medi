<?php 
	$material = consulta_txt("SELECT material FROM material_modulo WHERE id_modulo = '$id_modulo'","material");
?>
<div class="box-body">
     <p style="margin-top: -3px">
     	<a href="" class="a_texto_material">Texto</a> &nbsp;-&nbsp; 
     	<a href="" class="a_editar_material">Editar</a>
    </p>
    <div class="div_texto_material" style="margin-top:-12px;padding:5px">
            <?php echo $material ?>
    </div>
    <form class="div_editar_material" class="form_uno_subapartado" style="display: none">
        <textarea id="editor1" name="recopilador" rows="10" cols="80">
            <?php echo $material ?>
         </textarea>
    </form>
    <form class="form_material" method="post" style="display: none">
    	<input type="text" class="input_oculto" name="material">
    	<input type="text" value="<?php echo $id_modulo ?>" name="id_modulo">
    </form>
    <div class="mensaje_material">
    	
    </div>
</div>
    <div class="box-footer">           
	      <button type="button" class="btn btn-default btn_guardar_cambios">Guardar Cambios</button>       
	</div>
<script>
	$(function () {
	    // Replace the <textarea id="editor1"> with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace('editor1')
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5()
	})
	$(document).on('click','.a_texto_material',function(){
	    event.preventDefault();
	    $(".div_editar_material").hide()
	    $(".div_texto_material").show()
	})
	$(document).on('click','.a_editar_material',function(){
	    event.preventDefault();
   	    $(".div_texto_material").hide()
	    $(".div_editar_material").show()
	})
	$(document).on('click','.btn_guardar_cambios',function(){
		$('.btn_guardar_cambios').prop('disabled,true') 
		var contenido_uno = CKEDITOR.instances['editor1'].getData();
		$(".input_oculto").val(contenido_uno)
		$.ajax({
	        type:'POST',
	        url:"panel/process_material_modulo.php",
	        data:$('.form_material').serialize(),
	        success:function(data){
	            $(".mensaje_material").html(data)
	            $('.btn_guardar_cambios').prop('disabled,false')        
	        }
	    });
	})
</script>