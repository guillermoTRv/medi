<div class="panel panel-default">
    <a class="btn btn-primary btn-block" href="clinica.php?modulo=<?php echo $getvar ?>&act=agregar_clinica">Agregar Clinica</a>
</div>
<div class="list-group" style="text-align: center">
    <?php  
        $consulta = mysqli_query($q_sec,"SELECT * FROM ap_clinica WHERE id_modulo = '$id_modulo_get' order by posicion asc");
        while ($array = mysqli_fetch_array($consulta)) {
          $id_ap_clinica = $array["id_ap_clinica"];
          $ap_clinica = $array["ap_clinica"];
          ?>
            <a href="clinica.php?modulo=<?php echo $getvar ?>&apartado=<?php echo $id_ap_clinica ?>" class="list-group-item" style="padding: 5px"><?php echo $ap_clinica ?></a>
          <?php
        }
    ?>
</div>                 
<center>
    <p>
        <a style="color:black" href="clinica.php?modulo=<?php echo $getvar ?>"> Vista Principal</a> 
    </p>
</center>
<center>
    <p>
        <a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Regresar al indice</a> 
    </p>
</center>
<!--<center>
    <p>
        <a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Realizar una evaluacion</a> 
    </p>
</center>-->
<center>
    <p>
        <a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Subir un contenido</a> 
    </p>
</center>
<center><p><a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> A.F <?php echo $modulo_enc ?></p> </a></center>
<center><p><a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Farmacologia <?php echo $modulo_enc ?></p> </a></center>
<center><p><a style="color:black" href="clinica.php?modulo=<?php echo $getvar ?>&act=edicion_apartados_clinicos"> Edicion Apartados Clinica</p> </a></center>
<br>
<center><p>Realizar evaluacion</p></center><br>
<center><p>Notas(Biblio - General)</p></center><br>
<center><p>Vitacora General</p></center><br>
<center>
    <div class="dropup">
        <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Apartados A.F
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <?php 
                $consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$id_modulo_get' order by posicion asc");
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