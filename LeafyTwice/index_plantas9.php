<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Batamote | Leafy Twice</title>
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
        <h1>Batamote </h1>
        <img src="img/batamote.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Crecimiento</h3>
            <p class="parrafo">A medida que la planta madura, comienza a desarrollar su característica forma cilíndrica, agregando nuevas capas a su tallo principal. Este proceso de crecimiento puede acelerarse durante las temporadas de lluvia, cuando la planta absorbe más agua y experimenta un rápido aumento en su tamaño. Sin embargo, en condiciones de sequía, el crecimiento puede detenerse o ralentizarse considerablemente para conservar recursos. Como tal, es un arbusto que mide entre 0,8 a 2 m de altura. El tallo es leñoso y granuloso. Las hojas son alargadas y rectas con cabezuelas y laxas de 10 a 15 cm de largo.</p>
        </div>
        <div class="section">
            <h3>Flores</h3>
            <p class="parrafo">Las flores son masculinas y femeninas, de 5 a 7 mm de ancho, dispuestas en tres series con forma semiesférica, y los frutos son parecidos a una nuez, de color café blanquecino. Habita en lugares húmedos como las orillas de ríos y arroyos.</p>
        </div>
        <div class="section">
            <h3>Historia</h3>
            <p class="parrafo">El batamote, también conocido como Ferocactus wislizeni, es un cactus nativo de América del Norte, particularmente de las regiones desérticas de México y el suroeste de los Estados Unidos. Este cactus ha sido parte importante del ecosistema desértico durante siglos, sirviendo como fuente de alimento y refugio para diversas especies de animales y como recurso cultural para las comunidades indígenas de la región.</p>
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