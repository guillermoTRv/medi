<!DOCTYPE html>
<?php include("funciones.php") ?>
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
      <!-- Content Header (Page header) -->
      <section class="content-header"><br><br>
          <div class="row">
            <?php  
              $consulta_modulos = mysqli_query($q_sec,"SELECT * FROM modulos ORDER BY posicion ASC");
              while($array = mysqli_fetch_array($consulta_modulos)){
                  $modulo = $array["modulo"];
                  $getvar = $array["getvar"];
                  $color  = $array["color"];
                  if($color == 1){ $html_color = "bg-aqua";   }
                  if($color == 2){ $html_color = "bg-green";  }
                  if($color == 3){ $html_color = "bg-yellow"; }
                  if($color == 4){ $html_color = "bg-red";    }

                  $img_formato = "png";
                  if ($getvar == 'digestivo' or $getvar == 'endocrino' or $getvar == 'reproductor') {
                  $img_formato = "jpg";
                  }

                  ?>
                    <a href="indice.php?modulo=<?php echo $getvar ?>">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box <?php echo $html_color ?>">
                        <span ><img src="iconos/<?php echo $getvar ?>.<?php echo $img_formato ?>" class="info-box-icon" alt=""></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Sistema</span>
                          <span class="info-box-number"><?php echo ucwords($getvar) ?></span>
                        </div>
                      </div>
                    </div>
                    </a>
                  <?php
              }

            ?>
          </div>
      </section>

    </div>
  </div>
  <?php include("componentes/footer.php") ?>
</div>

<?php include("componentes/js.php"); ?>
</body>
</html>
