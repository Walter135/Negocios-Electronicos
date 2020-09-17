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
           <nav class="navegacion-principal clearfix secundaria">
            <a href="#memorias">Memorias</a>
            <a href="calendario.php">Discos Duros</a>
            <a href="productos.php">Placas Madre</a>
            <a href="invitados.php">Procesadores</a>
            <a href="invitados.php">Tarjetas de Video</a>
            <a href="registro.php">Case</a>
            <a href="conferencia.php">Fuentes de Poder</a>
            <a href="calendario.php">Laptops</a> 
          </nav>
    
            <div class="galeria">
            <a href="img/galeria/01.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/01.jpg">
            </a>
            <a href="img/galeria/02.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/02.jpg">
            </a>
            <a href="img/galeria/03.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/03.jpg">
            </a>
            <a href="img/galeria/04.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/04.jpg">
            </a>
            <a href="img/galeria/05.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/05.jpg">
            </a>
            <a href="img/galeria/06.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/06.jpg">
            </a>
            <a href="img/galeria/07.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/07.jpg">
            </a>
            <a href="img/galeria/08.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/08.jpg">
            </a>
            <a href="img/galeria/09.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/09.jpg">
            </a>
            <a href="img/galeria/10.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/10.jpg">
            </a>
        </div>
        </div>
      <div style="clear:both"></div>
       <?php 
       $conn->close() 
       ?>