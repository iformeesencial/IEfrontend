<div class="sidebars-zone row mar-top-80">
          <div class="col-sm-4">
            <h4>Los mas destacados</h4>

          <?php

                if(isset($_SESSION['todo'])){
                    if(!empty($_SESSION['todo'])){
                      $array = $_SESSION['todo'];
                      $val = count($array);
                      for ($i = 0; $i < $val; $i ++){
              ?>
            <a href="<?php echo $handler;?>?estado=5&num=<?php echo $array[$i]['numero'];?>"><p><?php echo $array[$i]['titulo'];?></p></a>
            <?php
                }
              }
            }
            ?>
          </div>
          <div class="col-sm-4">
            <h4>Noticias mas destacadas</h4>
            <?php

                if(isset($_SESSION['todo'])){
                    if(!empty($_SESSION['todo'])){
                      $array = $_SESSION['todo'];
                      $val = count($array);
                      for ($i = 0; $i < $val; $i ++){
              ?>
                      
            <ul class="list-unstyled">
              <li>
                <a href="<?php echo $handler;?>?estado=5&num=<?php echo $array[$i]['numero'];?>"><p><?php echo $array[$i]['titulo'];?></p></a>
              </li>
              <?php
                }
              }
            }
            ?>
          </div>
          <div class="col-sm-4">
            <h4>Síguenos en las redes sociales</h4>
            <ul class="list-unstyled">
              <li>
                <a href="#">Facebook</a>
              </li>
              <li>
                <a href="#">Twitter</a>
              </li>
              <li>
                <a href="#">Youtube</a>
              </li>
              <li>
                <a href="#">Instagram</a>
              </li>
            </ul>
          </div>
        </div>