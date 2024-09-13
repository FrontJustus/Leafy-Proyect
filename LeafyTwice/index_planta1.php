<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saguaro | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_agua.css">
  <link rel="stylesheet" href="css/style_nav.css">
  <script type="text/javascript" src="./js/javascript.js"></script>
  <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>  <!----------NAV BAR --------------->
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
        <h1>Sahuaro</h1>
        <img src="img/sahuaro1.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">C. gigantea es un cactus columnar, de porte arbóreo. De crecimiento extremadamente lento (1 m al cabo de veinticinco años)dada su longevidad, entre 150-200, años pueden llegar a alcanzar los 16 o 18 m de altura, algunos ejemplares incluso más.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">Las flores nacen en la zona apical de los tallos, sobre las areolas, con pétalos cortos de color blanco céreo y exterior verdoso, escamas en el pericarpio y en el tubo, estambres muy numerosos con antenas amarillas y estigma blanco crema con 15 lóbulos; mide entre 8,5 a 12,5 cm de largo por 5-6 cm de diámetro.La flor abre a la caída de la tarde y dura 24 horas. La floración se produce de mayo a junio.
            El fruto, de unos 4 a 7 cm es ovoide, dehiscente, rojo brillante cuando ha madurado.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">El saguaro ha sido desde tiempos remotos parte muy importante en la economía y la tradición de los indígenas del desierto, particularmente de los pápagos. Sus troncos suelen servir como material para la construcción de viviendas, mientras que tanto sus flores como sus frutos, ricos en azúcares, y sus semillas son comestibles.A partir de la pulpa roja de los frutos se prepara un jarabe, y en ocasiones también un vino que suelen usar de forma ritual en una ceremonia para la lluvia.</p>
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