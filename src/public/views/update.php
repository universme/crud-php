<?php
include_once './src/public/views/navbar.php';
?>
            <form action="" method="POST">
            <div class="frame13-button">
              <button type="submit" class="frame13-button1 button">Actualizar</button>
            </div>
          </div>
          <div class="frame13-form-fields">
            <div class="frame13-form-display">
              <div class="frame13-form-imputs">
                <div class="frame13-input-id">
                  <span class="frame13-text09">ID</span>
                  <input type="text" name="id" placeholder="Código" required="true" class="frame13-textinput" />
                </div>
                <div class="frame13-input-nombre">
                  <span class="frame13-text10">
                    <span>Nombre</span>
                    <br />
                  </span>
                  <input type="text" name="nombre" placeholder="Nombre"  class="frame13-textinput1" />
                </div>
                <div class="frame13-input-precio">
                  <span class="frame13-text13">
                    <span>Precio</span>
                    <br />
                  </span>
                  <input type="text" name="precio" placeholder="Precio"  class="frame13-textinput2" />
                </div>
                <div class="frame13-input-cantidad">
                  <span class="frame13-text16">
                    <span>Cantidad</span><br />
                  </span>
                  <input type="text" name="unidades" placeholder="Cantidad"  class="frame13-textinput3" />
                </div>
              </div>
            </div>
          
          </form>
    <div class="msj">
        <?php
        if (isset($_GET['msj'])) {
            echo ($_GET['msj']);
        }
        ?>
    </div>
          </div>
        </div>
        
        <div class="frame13-main-img"></div>
        
      </div>
      
    </div>
  </div>
</body>

</html>