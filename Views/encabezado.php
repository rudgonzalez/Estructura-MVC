<!DOCTYPE html>
<html lng="es, en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['page_title']; ?></title>
    
    <link rel="shortcut icon" href="../Assets/img/BeReborn-icono.png" type="image/x-icon">
    <!-- Estilos-->
    <link rel="stylesheet" href="../Assets/css/style.css" type="text/css">
    <!-- Iconos-->
    <script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
    <!--mapa de google-->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9sQfY1DV_imau2R-eclaq5si3imJau9w&callback=initMap"></script>-->
    <!--para el carusel-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
    <header>
        <div id="top-bar">
            <div class="fas fa-bars"></div>
        </div>
        <nav id="nav">
            <li class="n"><i class="fas fa-home"></i><a href="index.php">Inicio</a></li>
            <li class="n"><i class="fas fa-user"></i><a href="#nosotros">Nosotros</a></li>
            <li class="s"><i class="fab fa-uncharted"></i><a href="#servicio">Servicios</a></li>
            <li class="c"><i class="fas fa-map-marker-alt"></i><a href="contacto.php">Contacto</a></li>
            <li class="l"><a href="#login" class="login-button">Iniciar Sesión</a></li>
        </nav>
    </header>