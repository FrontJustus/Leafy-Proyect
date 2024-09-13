<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacion | Leafy twice</title>
  <link rel="stylesheet" href="css/style_informacionn.css">
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
                <li><a href="index.php" class="link">Inicio</a></li>
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
    <div class="container">
        <h1>Leafy Twice: Proyecto Natural</h1>
        <div class="info-section">
            <div class="question-block">
                <h3>¿Quiénes somos?</h3>
                <p>Leafy twice es un equipo de personas, las cuales llevan a cabo el desarrollo
                de un sitio web enfocado en el aprendizaje sobre la fauna Sonorese, y el cuidado del
                agua. El equipo está Formado por Gonzalez Diaz Fernando, Vazquez Dayana y Gomez Emily.
                Todos somos estudiantes del Centro de Bachillerato Tecnológico industrial y de servicios No.206
                en el cual cursamos la especialidad de programacion, misma donde aprendimos a desarrollar sitios y paginas web.
                </p>
            </div>
            <div class="question-block">
                <h3>¿Cuáles son nuestras metas?</h3>
                <p>
                El sitio web se mantendrá en desarrollo, al mismo tiempo, estamos trabajando en el desarrollo
                de una aplicacion que complemente Leafy twice, y asi crear un ecosistema virtual.</p>
                <img src="img/apoyo.jpg" alt="Imagen relacionada con la pregunta 2">
            </div>
            <div class="question-block">
                <h3>¿Cómo puedes ayudarnos?</h3>
                <p>Todos ayudan en cuanto empiezan a aplciar los consejos que son dados en Leafy twice, pero,
                si deseas aportar más, puedes mandarnos tus ideas y consejos al correo del equipo.</p>
            </div>
            <div class="question-block">
                <h3>¿Qué nos hace diferentes?</h3>
                <p>El constante cambio y actualizacion de informacion, ademas de nuestra propuesta de expandirnos
                para convertir el sitio en algo nacional, abarcando el norte de México, para despues avanzar
                al resto del pais. Junto al constante cambio y aprendizaje para llevar a su mejor punto nuestro
                proyecto, el cual tenemos trabajando desde principios de 2024.</p>
                <img src="img/apoyo2.jpg" alt="Imagen relacionada con la pregunta 4">
            </div>
            <div class="question-block">
                <h3>¿Qué ofrece nuestra página?</h3>
                <p>Diferentes secciones de apoyo para temas medio ambientales, como una para informarse sobre las más comunes en Sonora, con varios ejemplos, otra sección con plantas de fácil cuidado, las cuales pueden tener en su casa y no es necesario tanto cuidado con ellas, por lo que podrían tenerlas en casa sin mayor complicación, igualmente tiene un apartado especificamente dirigido al clima, se vale de una API e información de internet para pronosticar el clima actual de la ciudad establecida o de la ubicación de la computadora, junto a una sección con información del cuidado del agua para crear consciencia sobre ello.</p>
                <img src="img/apoyo3.png" alt="Imagen relacionada con la pregunta 5">
            </div>
            <div class="nav-button">
            <form action="index.php">
              <input type="hidden">
              <button class="btn white-btn"><a>Regresar</a></button>
            </form>
          </div>
        </div>
    </div>
    
    <?php include('all_footer.php')?>

  </div>
</body>
</html>