<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sonora | Leafy Twice</title>
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
        <h1>Sonora: Tierra Magica</h1>
        <img src="img/sonora.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Sonora como Estado Diverso</h3>
            <p class="parrafo">La diversidad de plantas de Sonora refleja la mezcla de grandes provincias biogeográficas. Los trópicos del Nuevo Mundo alcanzan su límite septentrional en Norteamérica en el este de Sonora. Muchas especies tropicales con amplia distribución alcanzan su límite norte cerca de Álamos en el sur de Sonora, en la selva baja caducifolia, la cual se extiende hasta los 28° 35’ N en la Sierra San Javier.</p>
        </div>
        <div class="section">
            <h3>Especies</h3>
            <p class="parrafo">El matorral espinoso de piedemonte (MEP) se extiende hasta los 30° 30’ N en la cuenca hidrográfica del río Bavispe, donde la distribución de algunas plantas y animales tropicales se extiende hacia el norte en los afluentes del norte del río Yaqui en el sureste de Arizona. Otras especies tropicales alcanzan su límite norte en la transición del matorral espinoso costero al Desierto Sonorense cerca de Guaymas (ca. 28° N) o en poblaciones aisladas en cañones o cumbres de sierras en el desierto.</p>
        </div>
        <div class="section">
            <h3>Limites</h3>
            <p class="parrafo">Muchas plantas alcanzan sus límites occidentales en la transición MEP-Desierto Sonorense en el este de Sonora y en los bosques de montaña de la Sierra Madre Occidental (SMO) en el este del estado. Varias plantas alcanzan sus límites más al sur en Sonora, entre las que se incluyen especies de zonas templadas en las serranías aisladas conocidas como islas serranas (en inglés sky islands) en el noreste y en la SMO en el este, y las especies del Desierto Sonorense en matorral espinoso en la planicie costera del sur de Sonora.</p>
        </div>
        <div class="section">
            <h3>Plantas deserticas</h3>
            <p class="parrafo">Algunas plantas de pastizal desértico y de matorral desértico del Desierto Chihuahuense alcanzan tanto sus límites meridional y occidental en la parte noreste y norte-centro de Sonora. Un total de 58 especies de plantas de Sonora están protegidas legalmente por el gobierno mexicano en la NOM-059-ECOL-2001 (NOM, 2002) como E (probablemente extinta), P (en peligro de extinción), A (amenazada) y Pr (sujeta a protección especial).</p>
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