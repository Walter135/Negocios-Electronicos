<?php include_once 'funciones/sesiones.php'; 
      include_once 'funciones/funciones.php';
      $id=$_GET['id']; 
      if (!filter_var($id,FILTER_VALIDATE_INT)) {
         die("Error");
       } 
      include_once 'templates/header.php';  
      include_once 'templates/barra.php';  
      include_once 'templates/navegacion.php'; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Categoria de Eventos
        <small>puedes editar los datos de la categoria aquí</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoria</h3>
            </div>
            <div class="box-body">
              <?php 
                  $sql="SELECT * from categoria_evento where `id_categoria`=$id";
                  $resultado=$conn->query($sql);
                  $categoria=$resultado->fetch_assoc();
                  
               ?>
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-categoria.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nombre">Nombre: </label>
                      <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre Categoria" value="<?php echo $categoria['cat_evento']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Icono: </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-address-book"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="icono" name="icono" placeholder="fa-icon" value="<?php echo $categoria['icono']; ?>">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="hidden" name="registro" value="actualizar">
                    <input type="hidden" name="id_registro" value="<?php echo $id;?>">
                    <button type="submit" class="btn btn-primary" name="agregar-categoria">Guardar</button>
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

<?php include_once 'templates/footer.php'; ?>