<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_agua.css">
  <link rel="stylesheet" href="css/style_nav.css">
  <script type="text/javascript" src="./js/javascript.js"></script>
  <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<!------------------------------NAV BAR --------------------------------->
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
                <li><a href="index_agua.php" class="link active">Agua</a></li>
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

<!---------------------------FIN NAVBAR-------------------------------------->
    <div class="container">
        <h1>El agua</h1>
        <img src="img/agua.jpg" alt="Descripción de la imagen">
        <div class="section">
            <h3>Escasez de agua</h3>
            <p class="parrafo">Aunque el 71 por ciento de superficie del planeta es agua, y el 29 por ciento restante es tierra, el volumen del líquido es relativamente pequeño, comparado con el de la tierra, además que, debido a temas diversos como la contaminación, el crecimiento poblacional, la sobreexplotación de recursos hídricos, entre otros, han afectado de manera que ahora hay una notoria y preocupante escasez de agua en bastantes lugares del mundo.</p>
        </div>
        <div class="section">
            <h3>Contaminación en el agua</h3>
            <p class="parrafo">Desde grandes trozos de basura hasta sustancias químicas invisibles, una amplia gama de contaminantes acaba en los lagos, ríos, arroyos, aguas subterráneas y, finalmente, en los océanos de nuestro planeta. La contaminación del agua junto con la sequía, la ineficacia y el aumento de la población ha contribuido a una crisis del agua dulce que amenaza las fuentes de las que dependemos para el agua potable y otras necesidades fundamentales.</p>
        </div>
        <div class="section">
            <h3>Accesibilidad al agua potable</h3>
            <p class="parrafo">Aunque el acceso al agua potable ha mejorado en muchos lugares en las últimas décadas, todavía hay millones de personas en el mundo que carecen de acceso a agua limpia y segura para beber, cocinar e higiene básica. Este problema está estrechamente relacionado con la pobreza, la falta de infraestructura adecuada y la distribución desigual de recursos, entre otras. Sumado a esto, está el dercho al agua potable, saludable, aceptable y asequible, aunque todos lo tenemos; no todos contamos con ese beneficio absoluto.</p>
        </div>
        <div class="section">
            <h3>Gestión del agua</h3>
            <p class="parrafo">En las últimas décadas, no obstante, se han multiplicado problemas y conflictos relacionados con el agua, como: el acceso a ella, su disponibilidad y calidad en ciudades y comunidades rurales, su reúso y contaminación, aparte de los desastres ocasionados por inundaciones y sequías, el cambio de los patrones de precipitaciones y temperaturas en diversas regiones. Además, otros temas importantes se han colocado como puntos de debate entre los expertos, gestores e instituciones que estudian o manejan el agua, como la concentración de derechos de extracción y fuentes de agua en pocas manos.</p>
        </div>
        <div class="section">
            <h3>Impactos del cambio climático</h3>
            <p class="parrafo">Una de las cosas que hacen que el cambio climático sea tan desastroso para la humanidad es su relación con el agua, ya que afecta su calidad, su disponibilidad y sus ciclos. No es cualquier cosa, las consecuencias muchas veces son fatales.  
            El aumento de la temperatura global altera el comportamiento de los océanos y los ciclos de agua. En el último decenio, 
            más del 90% de los grandes desastres naturales se produjeron a causa de inundaciones, tormentas, olas de calor, sequías
            y otros fenómenos meteorológicos.</p>
        </div>
    </div>
    <?php include('all_footer.php')?>
</body>
</html>
