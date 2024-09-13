<?php include ('all_php.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria | Leafy Twice</title>
  <link rel="stylesheet" href="css/style_galeria.css">
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
                    echo '<li><a href="index_galeria.php" class="link active">Galeria</a></li>';
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
    <h1 class="titulo">Plantas faciles de cuidar!</h1>
    <h3 class="subtitulo">Encuentra una variedad de plantas resistentes a este clima tan intenso
    como el que tenemos en nuestro bello estado de Sonora.</h3>
    <div class="card-container">
    <section id="card1" class="card">
      <img src="plantas/lengua.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Lengua de suegra</p>
        <p class="card__description">
         es perfecta para los amantes principiantes de las plantas porque sus cuidados no son tan complicados y sus hojas pueden crecer hasta 50 centímetros.
        </p>
      </div>
    </section>
    <!-- Carta 2 -->
    <section id="card2" class="card">
      <img src="plantas/lavanda.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Lavanda</p>
        <p class="card__description">
          la lavanda prospera con sol moderado y requiere poco riego. Sus colores morados y azulados, junto con su aroma característico, añadirán encanto a tu jardín en primavera y verano.
        </p>
      </div>
    </section>
    <!--carta 3-->
    <section id="card3" class="card">
      <img src="plantas/geranio.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Geranio</p>
        <p class="card__description">
          Es una de las plantas favoritas y más utilizadas para decorar balcones y ventanas y esto es debido a la sencillez que suponen sus cuidados frente a la belleza que aportan.
        </p>
      </div>
    </section>
    <!--carta 4--->
    <section id="card4" class="card">
      <img src="plantas/romero.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Romero</p>
        <p class="card__description">
          Esta planta es tolerante a la sequía y puede soportar altas temperaturas sin problemas. Además de su uso culinario, el romero se puede utilizar como seto, en macizos de flores o en macetas,
        </p>
      </div>
    </section>
    <!-----carta 5----->
    <section id="card5" class="card">
      <img src="plantas/lantana.jpeg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Lantana</p>
        <p class="card__description">
          La lantana es una planta colorida y resistente que florece en climas secos y soleados. Sus flores en forma de pequeñas umbelas están disponibles en una amplia gama de colores.
      </div>
    </section>
    <!-----carta 6------>
    <section id="card6" class="card">
      <img src="plantas/Dimorfoteca.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Dimorfoteca</p>
        <p class="card__description">
          Es una planta que no crece mucho en altura, pero sí que se extiende bastante, llegando al metro. Crece tanto a pleno sol como en semisombram, y soporta la sequía.
        </p>
      </div>
    </section>
    <!------carta 7----------->
    <section id="card7" class="card">
      <img src="plantas/buganvilla.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Buganvilla</p>
        <p class="card__description">
          De carácter rústico y poco exigente con el riego, tiene además un nivel de resistencia espectacular al calor. Recordemos que sus orígenes son mediterráneos.
        </p>
      </div>
    </section>
    <!----carta 8---->
    <section id="card8" class="card">
      <img src="plantas/sabila.jpg" alt="Descripción de la imagen" class="card__image">
          <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Savila</p>
        <p class="card__description">
          La sábila es una planta medicinal, posee propiedades beneficiosas para la salud, ayuda a cicatrizar heridas y quemaduras, puede ser fácilmente cultivada en casa, ya que no necesita cuidados especiales.
        </p>
      </div>
    </section>
    <!----carta 9------>
    <section id="card9" class="card">
      <img src="plantas/Verbena.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Verbena</p>
        <p class="card__description">
          Son plantas que no conviene regar demasiado, por lo tanto, es una buena opción para el verano cuando sabes que no va a llover lo suficiente
        </p>
      </div>
    </section>
    <!----carta 10------>
    <section id="card10" class="card">
      <img src="plantas/laurel.jpg" alt="Descripción de la imagen" class="card__image">
        <path
          d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
        ></path>
      </svg>
      <div class="card__content">
        <p class="card__title">Rosa laurel</p>
        <p class="card__description">
          es un arbusto perennifolio muy resistente a las altas temperaturas, pero necesita al menos dos o tres riegos semanales para sobrevivir. También conocida como laurel de flor debido a la similitud de sus hojas con las de este árbol.
        </p>
      </div>
    </section>
  </div>
  
  <?php include('all_footer.php')?>

  </div>
</body>
</html>