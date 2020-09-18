<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor" >
  <h2>Carrito de Compras</h2>
  <form id="registro" class="registro" action="modelo-carrito.php" method="post">
    <div class="table">
    <table style="width:100%">
      <thead class="thead-dark">
          <tr>
            <th scope="col" class="center">#</th>
            <th scope="col" class="center">Imagen</th>
            <th scope="col" class="center">Articulo</th>
            <th scope="col" class="center">PrecioxUnidad</th>
            <th scope="col" class="center">Cantidad</th>
            <th scope="col" class="center">Precio Total</th>
            <th scope="col" class="center">Quitar</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          try {
              require_once('includes/funciones/bd_conexion.php');
              $sql="SELECT id, MARCA,PRECIO,IMAGEN,cantidad,comprado ";
              $sql .="FROM carrito ";
              
              $sql .="INNER JOIN producto ";
              $sql .="ON carrito.idArticulo = producto.ID_PRODUCTO ";
              $sql .= "where comprado = 0 ";
              $resultado=$conn->query($sql);
          } catch (Exception $e) {
            echo $e->getMessage();
          }

        while($compra=$resultado->fetch_assoc()){ ?>
          <tr>
          <td class="center"><?php echo $compra['id']; ?></td>
          <td class="center" width="25%"><img src="img/<?php echo $compra['IMAGEN']; ?>" width="300px"></td>
          <td class="center"><?php echo $compra['MARCA']; ?></td>
          <td class="center"><?php echo $compra['PRECIO']; ?></td>
          <td class="center"><?php echo $compra['cantidad']; ?></td>
          <td class="center"><?php echo $compra['cantidad'] * $compra['PRECIO']; ?></td>
          <td class="center"><a href="#" data-id="<?php echo $compra['id']; ?>" data-tipo="carrito" class="btn bg-maroon btn-flat margin borrar-registro"><i class="fa fa-trash"></i></a></td>
          </tr>
          <?php } ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="center"><a class="button" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6BUHK3V2JN4VE">Pagar</a></td>
        </tr>
        </tbody>
    </table>
    </div>

  </form>
</section>

<?php include_once 'includes/templates/footer.php'; ?>