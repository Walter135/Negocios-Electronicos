<?php include_once 'includes/templates/header.php';  
    $id=$_GET['id'];
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sqlProductos="SELECT * from producto where ID_PRODUCTO = $id ";
        $resultadoProductos=$conn->query($sqlProductos);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
<div class="contenedor seccion">
    <form action="modelo-elemento.php" method="post" id="guardar-registro">
        <?php while ($productoxCategoria=$resultadoProductos->fetch_assoc()) { ?>
            <div class="imagen cuadrado">
                <img src="img/<?php echo $productoxCategoria["IMAGEN"] ?>" alt="imagen producto" style="width:100%">
            </div>

            <div class="Modelo cuadrado derecha">
                <p><?php echo $productoxCategoria["MODELO"] ?></p>
                <p><?php echo $productoxCategoria["MARCA"] ?></p>
            </div>

            <div class="Descripcion cuadrado derecha">
                <pre><?php echo $productoxCategoria["DESC_AMPLIADA"] ?></pre>
            </div>

            <div class="Precio cuadrado derecha">
                <?php echo $productoxCategoria["PRECIO"] ?>
            </div>

            <div class="Stock cuadrado derecha">
                <?php echo $productoxCategoria["STOCK"] ?>
            </div>
            
            <div class="Agregar cuadrado derecha">
                <label for="number">Ingrese la cantidad que desee comprar: </label>
                <input type="number" id="cantidad" name="cantidad"
                min="0" max="<?php echo $productoxCategoria["STOCK"] ?>">
            </div>
            
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="Agregar cuadrado derecha">
                <button class="button">Agregar a Carrito</button>
            </div>
        <?php } ?>
    </form>
</div>

<div style="clear:both"></div>
<?php 
    $conn->close() 
?>

<?php include_once 'includes/templates/footer.php'; ?>