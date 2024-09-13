<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sauco | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_agua.css">
  <link rel="stylesheet" href="css/style_nav.css">
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
        <h1>Saúco </h1>
        <img src="img/sauco.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">El diámetro de la planta en época seca es de 19,7 cm y en época de lluvia es de 24,5 cm. Luego de 9 meses, las plántulas de sauco (Sambucus nigra) alcanzaron un crecimiento promedio de 48,4 cm, mientras que a los 12 meses presentaron una altura promedio de 77,4 cm.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">La inflorescencia es muy ramificada y produce alrededor de 200 flores blancas fragantes de 4-8 mm de diámetro. Esta especie florece casi todo el año pero especialmente durante la primavera y el invierno. El fruto es esférico, de 5 mm de diámetro, carnoso y de color púrpura o negro, y contiene entre 3 y 5 semillas.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">El saúco, durante muchos siglos, fue protegido por el ser humano y el saúco le devolvía los favores: le daba las golosinas de sus ramilletes de flores, crudos o cocinados, le daba sus frutos para hacer mermeladas y siropes, para aromatizar vinos y licores. Proporcionaba remedios para la tos, los resfriados y las anginas.</p>
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