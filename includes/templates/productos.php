<?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT * from invitados";
              $resultado=$conn->query($sql);
          } catch (Exception $e) {
            echo $e->getMessage();
          }

       ?>
       <div class="contenedor">
           <nav class="navegacion-principal menu-programa clearfix secundaria">
            <a href="#memorias">Memorias</a>
            <a href="#discosduro">Discos Duros</a>
            <a href="#placasmadre">Placas Madre</a>
            <a href="#procesadores">Procesadores</a>
            <a href="#tarjetasvideo">Tarjetas de Video</a>
            <a href="#case">Case</a>
            <a href="#fuentespoder">Fuentes de Poder</a>
            <a href="#laptops">Laptops</a> 
          </nav>
    
          <div class="galeria ocultar info-producto" id= "memorias">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "discosduro">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "placasmadre">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "procesadores">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "tarjetasvideo">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "case">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "fuentespoder">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

          <div class="galeria ocultar" id= "laptops">
            <a href="img/placasmadre/Asrock.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Asrock.jpg">
            </a>
            <a href="img/placasmadre/DataOne.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/DataOne.jpg">
            </a>
            <a href="img/placasmadre/Gigabyte.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Gigabyte.jpg">
            </a>
            <a href="img/placasmadre/Sapphire.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Sapphire.jpg">
            </a>
            <a href="img/placasmadre/Seasonic.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Seasonic.jpg">
            </a>
            <a href="img/placasmadre/Thermaltake.jpg" data-lightbox="galeria">
            <img src="img/placasmadre/thumbs/Thermaltake.jpg">
            </a>
          </div>

        </div>
      <div style="clear:both"></div>
       <?php 
       $conn->close() 
       ?>