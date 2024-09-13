<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barril de oro | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_agua.css">
  <link rel="stylesheet" href="css/style_nav.css">
  <script type="text/javascript" src="./js/javascript.js"></script>
  <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
  <!----------NAV BAR --------------->
    <nav class="nav">
        <div class="nav-logo">
            <p class="big"><a href= "index.php">Leafy twice</a></p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link active">Inicio</a></li>
                <?php
                  if(isset($correo)){
                ?>
                <li><a href="index_plantas.php" class="link">Plantas</a></li>
                <?php } ?>
                <li><a href="index_clima.php" class="link">Clima</a></li>
                <li><a href="index_agua.php" class="link">Agua</a></li>
                <?php
                  if(isset($correo)){
                    echo '<li><a href="index_galeria.php" class="link">Galeria</a></li>';
                   // echo '<li><a href="index_cuenta.php" class="link">Cuenta</a></li>';
                  }
                ?>
                
            </ul>
        </div>
        <?php
        if (!isset ($correo)){

                echo'<div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()"><a href="index_acc.php">Inicia Sesion</a></button>
            <button class="btn" id="registerBtn" onclick="register()"><a href="index_acc.php">Registrate</a></button>
        </div>';
        }else{
          ?>
          <div class="nav-button">
            <form action="index.php" method="POST" onsubmit="return cerrar();">
              <input type="hidden" name="cerrar">
              <button type="submit" class="btn white-btn" id="cerrar"><a>Cerrar Sesion</a></button>
            </form>
          </div>
        <?php

        }

        ?> 
        <?php
        if(!isset ($correo)){
          echo'<div class="nav-menu-btn">
          <a type="hidden" href="index_acc.php">
            <i class="bx bx-user-circle" onclick="index_cuenta.php"></i>
          </a>
            <i class="bx bx-menu" onclick="menu()"></i>
        </div>';
        }else{
        echo'<div class="nav-menu-btn">
        <i class="bx bx-log-in" onclick="cierre();"></i>
        <i class="bx bx-menu" onclick="menu()"></i>
        </div>';
          }
        ?>
    </nav>

    <!---------------------------fin de la nav bar-------------------------------------->
    <div class="container">
        <h1>Barril de oro </h1>
        <img src="img/barril1.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">El Barril de oro suele crecer en algunos de los lugares más calurosos y soleados del mundo, y está bien adaptada a ese tipo de entorno, por lo que no necesita protegerse del sol. Sin embargo, debes tener cuidado al hacer un traslado repentino a un lugar muy soleado si tu "Barril de oro" no está acostumbrada. Puede tardar décadas en madurar.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">Las flores aparecen en las areolas superiores de los ejemplares adultos en verano. Surgen entre la lanosidad y duran 3 días. Miden entre 4 y 7 cm de longitud y 5 cm de diámetro, los pétalos externos son amarillentos por dentro y castaños por fuera. Los internos son amarillentos y brillantes.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">El Barril de oro actualmente se encuentra en peligro de extinción en estado silvestre, por lo que está protegido por la legislación de su lugar de origen. Tiene un gran atractivo visual, por lo que se cultiva ampliamente como planta ornamental.</p>
        </div>
        <div class="nav-button">
            <form action="index_plantas.php">
              <input type="hidden">
              <button class="btn white-btn"><a>Regresar</a></button>
            </form>
        </div>
    </div>
    
    <?php include('all_footer.php')?>

</body>
</html>
