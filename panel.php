<!DOCTYPE html>
<?php 
  include("funciones.php");
  $getvar = sanitizar_get("modulo");
  $get_id_apartado = sanitizar_get("apartado");
  $get_id_subapartado = sanitizar_get("subapartado");
  if ($get_id_subapartado != '') {
      $consulta = consulta_array("SELECT * FROM subapartados WHERE id_subapartado = '$get_id_subapartado'");
      $subapartado_enc = $consulta["subapartado"];   
      $recopilador = $consulta["recopilador"];
      $presentacion = $consulta["presentacion"]; 
      $temporal = $consulta["temporal"];
  }

  $id_modulo    = consulta_txt("SELECT id_modulo FROM modulos WHERE getvar = '$getvar'","id_modulo");
  $nombre_sistema = consulta_txt("SELECT modulo FROM modulos WHERE getvar = '$getvar'","modulo");

  $consulta = consulta_array("SELECT * FROM apartados WHERE id_modulo = '$id_modulo' and id_apartado = '$get_id_apartado'");
  $enc_apartado = $consulta["apartado"];

  $tipo = sanitizar_get("tipo");
  $get_act = sanitizar_get("act");

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medii</title>
  <?php include("componentes/css.php") ?>
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <?php include("componentes/header.php"); ?>
  <div class="content-wrapper">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-md-3">
                <div class="box box-default">
                  <!--<div class="box-header with-border">
                    <h3 class="box-title">System Search</h3>
                  </div>-->
                  <div class="box-body">
                    <div class="panel panel-default">
                      <div class="panel-body" style="padding-top:8px;padding-bottom:5px">
                        <p style="text-align: center;font-size:1.1em"><strong><?php echo $nombre_sistema ?></strong></p>
                      </div>
                    </div>
                    <?php //include("componentes/system_search.php"); ?>
                    <?php include("componentes/barra_opciones.php"); ?>

                  </div>
                </div>
        </div>
        <div class="col-md-9">
            <div class="box box-default">
                <div class="box-header with-border">
                    <?php include("panel/controlador_title.php"); ?>
                </div>
                
                    <?php include("panel/controlador.php"); ?>
                
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("componentes/footer.php") ?>
</div>

<?php include("componentes/js.php"); ?>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>

</script>
</body>
</html>
