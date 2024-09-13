<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantas | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_informacion.css">
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
                <li><a href="index_plantas.php" class="link active">Plantas</a></li>
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
    <a href="index_sonora.php"><h1 class="titulo">PLANTAS SONORENSES</h1></a>
    <!--------CARTAS---------->
    <section class="articles">
      
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/sahuaro.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Sahuaro</h2>
            <p>
              arnegiea gigantea, el saguaro o sahuario, es el cactus columnar típico del Desierto de Sonora. Se trata de un género monotípico y es una de las especies de mayor porte entre las cactáceas. 
            </p>
            <a href="index_planta1.php" class="read-more">
              Quiero saber mas<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!---CARTA 2------>
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/mezquite.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Mezquite</h2>
            <p>
              El mezquite es un árbol que crece en zonas áridas. Sus hojas y tallos son utilizados como agua de uso o mascado para tratar el empacho, la insolación y la conjuntivitis. 
            </p>
            <a href="index_planta2.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!---CARTA 3------>
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/nopal.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Nopal</h2>
            <p>
              Se dice que comer la penca del nopal es bueno para tratar enfermedades como la diabetes y el colesterol alto.Puede ser consumido crudo, cocido, en polvo o en cápsulas.                         
            </p>
            <a href="index_planta3.php" class="read-more">
              Quiero saber más <span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!---CARTA 4------>
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/palofierro.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Palo fierro</h2>
            <p>
              Aunque en Sonora, el palo fierro es conocido por las figuras artesanales que se fabrican con su madera, la corteza, raíz y hojas de este árbol pueden cocerse tratar el asma y los malestares gástricos.
            </p>
            <a href="index_plantas4.php" class="read-more">
              Quiero saber más <span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!---------carta 5------------>
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/choya.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Choya</h2>
            <p>
              De esta desértica planta se utiliza la raíz y el fruto para curar dolores de estómago, diarreas y diabetes. Existe otra variedad, la Opuntia Fulgida, que se utiliza la savia, el fruto, el tallo y la raíz para tratar el dolor de muelas y la diarrea.
            </p>
            <a href="index_plantas5.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!-------carta 6--------->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/sauco.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Sauco</h2>
            <p>
              Los tés de la flor de sauco tienen diversas propiedades medicinales. Puede tratar la tos, bronquitis, asma, gripe y amigdalitis. Además, también es purgante, desinfectante y diurético.
            </p>
            <a href="index_plantas6.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!---------7--------------->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/maguey.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Maguey</h2>
            <p>
              El Agave Angustifolia, mejor conocido como Maguey Bacanora, es una de las plantas que pertenecen a la región sonorense, y se utiliza principalmente para la creación de licor.
            </p>
            <a href="index_planta7.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!-----------8----------->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/barril1.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Barril de oro</h2>
            <p>
              es un rarísimo cactus de tamaño pequeño y forma redondeada, armado con espinas muy fuertes y afiladas. Actualmente, se encuentra en peligro de extinción en estado silvestre.
            </p>
            <a href="index_planta8.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
      <!--------9----->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="img/batamote.jpg" alt="" />
          </figure>
          <div class="article-body">
            <h2>Batamote</h2>
            <p>
             El batamote es un arbusto que nace a orillas de los ríos; sus tallos son delgados y rectos. Las hojas asadas pueden frotarse como fomento en las extremidades afectadas.
            </p>
            <a href="index_plantas9.php" class="read-more">
              Quiero saber más<span class="sr-only">about this is some title</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>
    </section>
    
    <?php include('all_footer.php')?>

</body>
</html>