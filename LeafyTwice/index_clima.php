<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Clima | Leafy Twice</title>
    <link rel="stylesheet" href="css/clima.css">
    <link rel="stylesheet" type="text/css" href="css/style_nav.css">
    <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <script type="text/javascript" src="./js/javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/js.js" defer></script>
  </head>
  <body>
  <!----------NAV BAR --------------->
    <nav class="nav">
        <div class="nav-logo">
            <p class="big"><a href= "index.php">Leafy twice</a></p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link">Inicio</a></li>
                <?php
                  if(isset($correo)){
                ?>
                <li><a href="index_plantas.php" class="link">Plantas</a></li>
                <?php } ?>
                <li><a href="index_clima.php" class="link active">Clima</a></li>
                <li><a href="index_agua.php" class="link">Agua</a></li>
                <?php
                  if(isset($correo)){
                    echo '<li><a href="index_galeria.php" class="link">Galeria</a></li>';
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
      <div class="weather-input">
        <h3>Ingresa el nombre de la ciudad</h3>
        <input class="city-input" type="text" placeholder="Ej. Chihuahua, Tabasco, Los Mochis">
        <button class="search-btn">Buscar</button>
        <div class="separator"></div>
        <button class="location-btn">Usar ubicacion actual</button>
      </div>
      <div class="weather-data">
        <div class="current-weather">
          <div class="details">
            <h2>_______ ( ______ )</h2>
            <h6>Temperatura: __°C</h6>
            <h6>Viento: __ M/S</h6>
            <h6>Humedad: __%</h6>
          </div>
        </div>
        <div class="days-forecast">
          <h2>Clima 5-Dias</h2>
          <ul class="weather-cards">
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temperatura: __C</h6>
              <h6>Viento: __ M/S</h6>
              <h6>Humedad: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temperatura: __C</h6>
              <h6>Viento: __ M/S</h6>
              <h6>Humedad: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temperatura: __C</h6>
              <h6>Viento: __ M/S</h6>
              <h6>Humedad: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temperatura: __C</h6>
              <h6>Viento: __ M/S</h6>
              <h6>Humedad: __%</h6>
            </li>
            <li class="card">
              <h3>( ______ )</h3>
              <h6>Temperatura: __C</h6>
              <h6>Viento: __ M/S</h6>
              <h6>Humedad: __%</h6>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php include('all_footer.php')?>
    <!--Aqui acaba el footer-->  
  </body>
</html>