<?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT * from categoria";
              $resultado=$conn->query($sql);
              $num_categorias=$resultado->num_rows;
          } catch (Exception $e) {
            echo $e->getMessage();
          }

       ?>

      <div class="contenedor">
        <nav class="navegacion-principal menu-programa clearfix secundaria">
          <?php while ($categorias=$resultado->fetch_assoc()) { ?>
            <a href="#categoria<?php echo $categorias["ID_CATEGORIA"] ?>"><?php echo $categorias["DESCRIPCION"] ?></a>
          <?php } ?>
        </nav>

        <?php
          for($indiceCat = 1; $indiceCat <= $num_categorias; $indiceCat++){?>
            <div class="galeria ocultar info-producto" id= "categoria<?php echo $indiceCat ?>">
              <?php 
                try {
                    $sqlProductos="SELECT * from producto where id_categoria = $indiceCat ";
                    $resultadoProductos=$conn->query($sqlProductos);
                } catch (Exception $e) {
                  echo $e->getMessage();
                }
              ?>

              <section class="invitados contenedor seccion">

                <ul class="lista-productos clearfix">
                    <?php while ($productoxCategoria=$resultadoProductos->fetch_assoc()) { ?>
                        <li>
                          <div class="producto">
                            <a href="elemento.php?id=<?php echo $productoxCategoria["ID_PRODUCTO"] ?>">
                            <img src="img/<?php echo $productoxCategoria["IMAGEN"] ?>" alt="imagen producto">
                            <p><?php echo $productoxCategoria["DESC_REDUCIDA"] ?> Precio: S/ <?php echo $productoxCategoria["PRECIO"]?></p>
                            </a>
                          </div>
                        </li>
                <?php } ?>
                </ul>

              </section>

            </div>          
        <?php  
        }
        ?>

      </div>  

       <div style="clear:both"></div>
       <?php 
       $conn->close() 
       ?>