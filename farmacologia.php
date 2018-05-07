<!DOCTYPE html>
<?php 
  include("funciones.php");
  $getvar     = sanitizar_get("modulo");
  $consulta   = consulta_array("SELECT modulo,id_modulo FROM modulos WHERE getvar = '$getvar'");
  $modulo_enc = $consulta['modulo'];
  $id_modulo_get = $consulta['id_modulo'];
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
                  <!--<div class="box-header with-border">
                    <h3 class="box-title">System Search</h3>
                  </div>-->
                  <div class="box-body">
                    <div class="panel panel-default">
                      <button type="button" class="btn btn-primary btn-block">Agregar Ficha</button>
                    </div>
                    
                    <div class="list-group" style="text-align: center">
                      <?php  
                        $consulta = mysqli_query($q_sec,"SELECT * FROM ap_farma WHERE id_modulo = '$id_modulo_get'");
                        while ($array = mysqli_fetch_array($consulta)) {
                          $ap_farma = $array["ap_farma"];
                          ?>
                            <a href="" class="list-group-item" style="padding: 5px"><?php echo $ap_farma ?></a>
                          <?php
                        }
                      ?>
                    </div>

                    <center><p><a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Regresar al indice</p> </a></center>
                    <center><p><a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Realizar una evaluacion</p> </a></center>
                    <br>
                    <center>
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Apartados
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <?php 
                            $consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = 1");
                            while ($array =  mysqli_fetch_array($consulta)) {
                              $apartado = $array["apartado"];
                              ?>
                                <li><a href="#" style="color:black"><?php echo $apartado ?></a></li>
                              <?php
                            }
                          ?>
                        </ul>
                      </div>
                    </center>
                    <center></center>

                  </div>
                  <!-- /.box-body -->
                </div>
        </div>
        <div class="col-md-9">
            <div class="box box-default">
                <div class="box-header with-border">
                  <?php include("farmacologia/controlador_title.php"); ?>
                </div>
                  <?php include("farmacologia/controlador.php"); ?>
                              
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
