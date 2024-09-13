<?php include ('all_php.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Leafy Twice</title>
  <script type="text/javascript" src="js/javascript.js"></script>
  <link rel="stylesheet" href="css/style_index.css">
  <link rel="stylesheet" href="css/style_nav.css">
  <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
  <!----------NAV BAR --------------->
    <nav class="nav">
        <div class="nav-logo">
            <p class="big"><a href= "index.php">Leafy Twice</a></p>
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
            <form action="index.php" id="fin" method="POST" onsubmit="return cerrar();">
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
        <i class="bx bx-menu" onclick="menu();"></i>
        </div>';
          }
        ?>
    </nav>

    <!---------------------------fin de la nav bar-------------------------------------->
    <section class="main">

        <section class="left">
            <p class="title">Descubriendo Sonora</p>
            <p class="msg">En conjunto, tratamos de solucionar la sequia
            producida por las grandes empresas y el descuido gubernamental.
            ¡Leafy twice siempre será gratis! Asi todos podran ser partes del
            movimiento.</p>
            <button class="cta , big" href="index_informacion.php"><a type="hidden" href="index_informacion.php">Informacion</a></button>
        </section>

        <section class="right">
            <img src="./img/colorado.jpeg" alt="Langing image">
        </section>

    </section>
   
    <?php include('all_footer.php')?>

  </div>
</body>
</html>
