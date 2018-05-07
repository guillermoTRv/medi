<!DOCTYPE HTML>
<html>
 <head>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   
 </head>
 <body>
 <form method="post" id="formulario" enctype="multipart/form-data">
    Subir imagen: <input type="file" name="file">
    <p class="memo" >Hola</p>
 </form>
  <div id="respuesta"></div>
 </body>
</html>
<script>
     
       $(document).on("click",".memo",function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "process_subir_articulo.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
     
    </script>