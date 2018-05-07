<div class="list-group" style="text-align: center">
                      <?php 
                        $consulta = mysqli_query($q_sec,"SELECT * FROM subapartados WHERE id_apartado = '$id_apartado'");
                        while ($array =  mysqli_fetch_array($consulta)) {
                          $sub_apartado   = $array["subapartado"];
                          $id_subapartado = $array["id_subapartado"];
                          $ruta_subapartado = "panel.php?modulo=$getvar&apartado=$id_apartado&subapartado=$id_subapartado"
                          ?>
                            <a href="<?php echo $ruta_subapartado ?>" class="list-group-item" style="padding: 5px"><?php echo $sub_apartado ?></a>
                          <?php
                        }
                      ?>
                      <a href="<?php echo $ruta_subapartado ?>" class="list-group-item" style="padding: 5px">Sin Clasificar</a>
                      <a href="<?php echo $ruta_subapartado ?>" class="list-group-item" style="padding: 5px">En general</a>
                    </div>
                    <?php $ruta_mas = "panel.php?modulo=$getvar&apartado=$id_apartado" ?>
                    <center>
                        <p>
                          <a style="color:black" href="<?php echo $ruta_mas ?>">Vista Principal</a>
                        </p>
                    </center>
                    <center>
                        <p>
                          <a style="color:black" href="indice.php?modulo=<?php echo $getvar ?>"> Regresar al indice</a>
                        </p>
                    </center>
                    <center>
                        <p>
                          <a style="color:black" href="">Subir un Contenido</a>
                        </p>
                    </center>
                    <center>
                        <p>
                          <a style="color:black" target="_blank" href="clinica.php?modulo=<?php echo $getvar ?>">Clinica del <?php echo $name_sistema ?></a>
                        </p>
                    </center>
                    <center>
                        <p>
                          <a style="color:black" target="_blank" href="farmacologia.php?modulo=<?php echo $getvar ?>">Farmacologia del <?php echo $name_sistema ?></a>
                        </p>
                    </center>
                    <center>
                        <p>
                          <a style="color:black" href="<?php echo $ruta_mas ?>&act=edicion_subapartados">Edicion Subapartados</a>
                        </p>
                    </center>
                    <br>
                    <center><p>Realizar evaluacion</p></center><br>
                    <center><p>Notas(Biblio - General)</p></center><br>
                    <center><p>Vitacora General</p></center><br>
                    <center>
                      <div class="dropup">
                        <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Apartados
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <?php 
                            $consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = 1");
                            while ($array =  mysqli_fetch_array($consulta)) {
                              $id_apartado_mod = $array["id_apartado"];
                              $apartado = $array["apartado"];
                              ?>
                                <li><a href="?modulo=<?php echo $getvar ?>&apartado=<?php echo $id_apartado_mod ?>" style="color:black"><?php echo $apartado ?></a></li>
                              <?php
                            }
                          ?>
                        </ul>
                      </div>
                    </center>