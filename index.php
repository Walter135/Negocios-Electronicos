<?php include_once 'includes/templates/header.php'; ?>


  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!
    </p>
  </section><!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>
    </div><!--.contenedor-video-->
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del evento</h2>

        <?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT * FROM categoria_evento";
              $resultado=$conn->query($sql);
          } catch (Exception $e) {
            echo $e->getMessage();
          }

       ?>
        <nav class="menu-programa">
          <?php while($cat=$resultado->fetch_array(MYSQLI_ASSOC)) {?>
            <?php $categoria= $cat["cat_evento"]?>
            <a href='#<?php echo strtolower($categoria); ?>'><i class='fas <?php echo $cat["icono"]; ?>' aria-hidden="true"></i> <?php echo $categoria; ?></a>
          <?php } ?>
        </nav>

        <?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
              $sql .="FROM eventos ";
              
              $sql .="INNER JOIN categoria_evento ";
              $sql .="ON eventos.id_cat_evento = categoria_evento.id_categoria ";

              $sql .="INNER JOIN invitados ";
              $sql .="ON eventos.id_inv = invitados.invitado_id ";
              $sql .="AND eventos.id_cat_evento = 1 ";
              $sql .="ORDER BY evento_id LIMIT 2; ";
              $sql .="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
              $sql .="FROM eventos ";
              
              $sql .="INNER JOIN categoria_evento ";
              $sql .="ON eventos.id_cat_evento = categoria_evento.id_categoria ";

              $sql .="INNER JOIN invitados ";
              $sql .="ON eventos.id_inv = invitados.invitado_id ";
              $sql .="AND eventos.id_cat_evento = 2 ";
              $sql .="ORDER BY evento_id LIMIT 2; ";
              $sql .="SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento,icono, nombre_invitado, apellido_invitado ";
              $sql .="FROM eventos ";
              
              $sql .="INNER JOIN categoria_evento ";
              $sql .="ON eventos.id_cat_evento = categoria_evento.id_categoria ";

              $sql .="INNER JOIN invitados ";
              $sql .="ON eventos.id_inv = invitados.invitado_id ";
              $sql .="AND eventos.id_cat_evento = 3 ";
              $sql .="ORDER BY evento_id LIMIT 2 ";
          } catch (Exception $e) {
            echo $e->getMessage();
          }

       ?>
       <?php $conn->multi_query($sql); ?>
       <?php 
            do{
          $resultado=$conn->store_result();
          $row=$resultado->fetch_all(MYSQLI_ASSOC);?>

          <?php $i=0; ?>
          <?php foreach ($row as $evento) : ?>
                <?php if($i%2==0){ ?>
              <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
              <?php } ?>
                <div class="detalle-evento">
                  <h3><?php echo ucfirst(iconv("ISO-8859-1","UTF-8",utf8_decode($evento['nombre_evento']))) ?> </h3>
                  <p><i class="fas fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                  <p><i class="fas fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento']; ?></p>
                  <p><i class="fas fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado']." ".$evento['apellido_invitado']; ?></p>
                </div>
                <?php if($i%2==1){ ?>
                  <a href="calendario.php" class="button float-right">Ver todos</a>
                  </div><!--#talleres-->
                <?php }; ?>
          <?php $i++; ?>
        <?php endforeach;  ?>
        <?php $resultado->free(); ?>
       <?php }while ($conn->more_results() && $conn->next_result()); ?>

      </div><!--.programa-evento-->
    </div><!--.contenedor-->
  </div><!--.contenido-programa-->
  </section><!--.programa-->


<?php include_once 'includes/templates/invitados.php'; ?>


  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">0</p> Invitados</li>
        <li><p class="numero">0</p> Talleres</li>
        <li><p class="numero">0</p> Dias</li>
        <li><p class="numero">0</p> Conferencias</li>
      </ul>
    </div>
  </div>


  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
    <div class="Testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi corporis, ducimus, est, excepturi hic id magni maxime modi odio perferendis quos sed. Ab aperiam distinctio dolor fugiat iure.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!--.testimonial-->
    <div class="Testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi corporis, ducimus, est, excepturi hic id magni maxime modi odio perferendis quos sed. Ab aperiam distinctio dolor fugiat iure.</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!--.testimonial-->
    <div class="Testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi corporis, ducimus, est, excepturi hic id magni maxime modi odio perferendis quos sed. Ab aperiam distinctio dolor fugiat iure.</p>
        <footer class="info-testimonial  clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!--.testimonial-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>registrate al newsletter:</p>
      <h3>gdlwebcamp</h3>
      <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
    </div><!--.contenido-->
  </div><!--Newsletter-->



  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p class="numero" id="dias"></p> dias</li>
        <li><p class="numero" id="horas"></p> horas</li>
        <li><p class="numero" id="minutos"></p> minutos</li>
        <li><p class="numero" id="segundos"></p> segundos</li>
      </ul>
    </div>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>