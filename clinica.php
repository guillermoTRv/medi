<!DOCTYPE html>
<?php 
  include("funciones.php");
  $getvar     = sanitizar_get("modulo");
  $consulta   = consulta_array("SELECT modulo,id_modulo FROM modulos WHERE getvar = '$getvar'");
  $modulo_enc = $consulta['modulo'];
  $id_modulo_get = $consulta['id_modulo'];

  $id_apartado_get = sanitizar_get("apartado");
  $apartado_enc = consulta_txt("SELECT ap_clinica FROM ap_clinica WHERE id_ap_clinica = '$id_apartado_get'","ap_clinica");

  $action = sanitizar_get("act");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MediClinica</title>
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
                <div class="box-body">
                    <?php include("clinica/barra_opciones.php") ?>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-default">
                <div class="box-header with-border">
                  <?php include("clinica/controlador_title.php"); ?>
                </div>
                  <?php include("clinica/controlador.php"); ?>
                              
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("componentes/footer.php") ?>
</div>

<?php include("componentes/js.php"); ?>
<script src="bower_components/ckeditor/ckeditor.js"></script>
</body>
</html>
