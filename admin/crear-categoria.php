<?php include_once 'funciones/sesiones.php'; ?>
<?php include_once 'funciones/funciones.php'; ?>
<?php include_once 'templates/header.php'; ?> 
<?php include_once 'templates/barra.php'; ?> 
<?php include_once 'templates/navegacion.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Categoría
        <small>llena el formulario para crear una categoria</small>
      </h1>
    </section>
    <div class="row">
      <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Categoría</h3>
            </div>
            <div class="box-body">
                <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-categoria.php">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="nombre">Nombre: </label>
                      <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre Categoria">
                    </div>

                    <div class="form-group">
                      <label for="">Icono: </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-address-book"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="icono" name="icono" placeholder="fa-icon">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="hidden" name="registro" value="nuevo">
                    <button type="submit" class="btn btn-primary" name="agregar-categoria" id="crear_registro_categoria">Añadir</button>
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