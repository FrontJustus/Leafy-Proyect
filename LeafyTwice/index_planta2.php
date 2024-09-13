<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mezquite | Leafy Twice</title>
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
        <h1>Mezquite</h1>
        <img src="img/mezquite.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">El mezquite es un árbol que puede crecer entre 9 y 10 metros de altura, con una extensión de 9 a 12 metros. Sus hojas son finas y delicadas, y su tronco tiene tonalidades grises, con una forma escultórica que puede ser simple o múltiple. Tiene una apariencia llorona debido a su follaje esbelto y verde intenso.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">La floración del mezquite ocurre durante marzo y abril, con algunas variaciones según el municipio de la región. Por otro lado, el pinabete florece desde junio hasta finales de agosto. Las flores del mezquite son de color amarillo pálido-verdoso y aparecen en racimos puntiagudos que pueden medir entre 5 y 12 cm de largo.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">La palabra "mezquite" proviene del náhuatl "mizquitl". Los pueblos originarios de la región empleaban las raíces del árbol para confeccionar arcos y utilizaban sus frutos, llamados vainas, como un alimento esencial. Consumían las vainas durante el verano o las procesaban trituradas y secas para la temporada de otoño e invierno, a veces preparándolas como una bebida.</p>
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