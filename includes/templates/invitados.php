      <?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT * from invitados";
              $resultado=$conn->query($sql);
          } catch (Exception $e) {
            echo $e->getMessage();
          }

       ?>
          <section class="invitados contenedor seccion">
              <h2>Contacto</h2>
                <ul class="lista-invitados clearfix">
                <head>
                  <title> Contacto </title>
                  <link rel="stylesheet" type="text/css" href="css/Contacto.css">
                </head>
                <body>
                <form method="POST"> 
                  <input type="text" placeholder="Nombre" name="Nombre" required="">
                  <input type="email" placeholder="Email" name="Email" required="">
                  <input type="text" placeholder="Asunto" name="Asunto" required="">
                  <textarea  placeholder="Mensaje" name="msg"></textarea>
                  <input type="submit" name="Enviar" >

                </form>  
                <?php
                if(isset($_POST['Enviar'])){
                   if(!empty($_POST['Nombre'])&&!empty($_POST['Email'])&&!empty($_POST['Asunto'])&&!empty($_POST['msg'])){
                      $name=$_POST['Nombre'];
                      $Email=$_POST['Email'];
                      $Asunto=$_POST['Asunto'];
                      $msg=$_POST['msg'];
                      $header="From: noreply@example.com"."\r\n";
                      $header.="Reply-To: noreply@example.com"."\r\n";
                      $header.="X-Mailer: PHP/". phpversion();
                      $mail=@mail($Email,$Asunto,$msg,$header);
                      if($mail){
                        echo "<h4>¡Mail enviado</h4>>";

                      }

                    }
                  } 
                ?>
                </body>
                

                 
         <?php while ($invitados=$resultado->fetch_assoc()) { ?>
                  <li>
                    <div class="invitado">
                      <a class="invitado-info" href="#invitado<?php echo $invitados["invitado_id"] ?>">
                      <img src="img/invitados/<?php echo $invitados["url"] ?>" alt="imagen invitado">
                      <p><?php echo $invitados["nombre_invitado"]." ".$invitados["apellido_invitado"] ?></p>
                      </a>
                    </div>
                  </li>
                  <div style="display: none;">
                    <div class="invitado-info" id="invitado<?php echo $invitados["invitado_id"] ?>">
                      <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado'] ?></h2>
                      <img src="img/<?php echo $invitados["url"] ?>" alt="imagen invitado">
                      <p><?php echo $invitados['descripcion']; ?></p>
                    </div>
                  </div>
         <?php } ?>
                </ul>
          </section>
       <?php 
       $conn->close() 
       ?>