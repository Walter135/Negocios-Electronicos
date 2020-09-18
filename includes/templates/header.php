<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    // Definir archivo para cachear (puede ser .php también)
  $archivoCache = 'cache/'.$pagina.'.html';
  // Cuanto tiempo deberá estar este archivo almacenado
  $tiempo = 36000;
  // Checar que el archivo exista, el tiempo sea el adecuado y muestralo
  if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
    include($archivoCache);
      exit;
  }
  // Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
  ob_start();
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Proyecto</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <?php 
        $archivo=basename($_SERVER['PHP_SELF']);
        $pagina=str_replace(".php","",$archivo);
        if ($pagina=='invitados' || $pagina=='index' || $pagina =='productos') {
          echo '<link rel="stylesheet" href="css/colorbox.css">';
        }
        elseif($pagina=='conferencia'){
          echo '<link rel="stylesheet" href="css/lightbox.css">';
        }
   ?>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">
  <!--[if lte IE 9]
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fas fa-calendar-alt"></i> 18-09 Setiembre</p>
            <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Lima, Perú</p>
          </div>
          <h1 class="nombre-sitio">RITSOLUTION EIRL</h1>
          <p class="slogan">Empresa para compra de articulos tecnológicos</p>
       </div><!--.informacion-evento-->
      </div>
    </div>
  </header>


  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
        <img src="img/logo.svg" alt="logo gdlwebcamp">
        </a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Home</a>
        <a href="productos.php">Productos</a>
        <a href="invitados.php">Nosotros</a>
        <a href="invitados.php">Contacto</a>
        <a href="registro.php">Carrito</a>
        <div style="display: inline-block;margin-left: 120px;">
          <a href="conferencia.php">Iniciar Sesion</a>
          <a href="calendario.php">Registrarse</a>
        </div>        
      </nav>
    </div><!--.contenedor-->
  </div><!--.barra-->