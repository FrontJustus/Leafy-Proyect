<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nopal | Leafy Twice</title>
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
        <h1>Nopal</h1>
        <img src="img/nopal.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">El nopal se desarrolla en una gran diversidad de suelos, pero se sugiere que se plante en aquellos que tengan buena fertilidad, capa arable de al menos 30 centímetros, buen drenaje que evite los encharcamientos y cerca de alguna fuente de agua para riego, de esta manera, se aseguran altos rendimientos.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">Florece una vez al año y tanto el fruto como la flor pueden ser de diversos colores, desde el amarillo hasta el rojo. El fruto maduro es una baya de forma ovalada con diámetros que oscilan entre 5,5 y 7 cm, una longitud de 5 cm a 11 cm y un peso variable entre 43 y 220 g.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">La familia de los cactos – biznagas, tetechos, nopales y choyas – se originó en el continente americano y se distribuye naturalmente desde el sur de Canadá hasta la Patagonia, en Argentina. De las 1,400 especies de cactos, 670 viven en México, y de estas, 508 son endémicas. Este vegetal fue el alimento principal de los grupos chichimecas. Ellos lo llamaron "nohpalli", voz náhuatl que se transformó en "nopal" a la llegada de los españoles.</p>
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