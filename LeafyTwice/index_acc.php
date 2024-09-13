<?php
  require("./files/conexion.php");
  session_start();
  if(isset($_REQUEST['cerrar'])){
    unset($correo);
    unset($contrasena);
    unset($nombre);
    session_destroy();
  }else{
    if(isset($_SESSION['correo'])){
    $correo = $_SESSION['correo'];
    $contrasena = $_SESSION['contrasena'];
    $nombre = $_SESSION['apellidos'] . " " . $_SESSION["nombre"];

  }
  if(isset($_REQUEST['correo']) && !isset($_REQUEST['inicio_sesion'])){

    //registro
     if($_REQUEST['contrasena'] != $_REQUEST['contrasenaConf']) {
        $query ="INSERT INTO `usuario` (`correo`, `contrasena`, `nombre`, `apellidos`) 
                 VALUES ('".$_REQUEST['correo']."', '".$_REQUEST['contrasena']."', '".$_REQUEST['nombre']."', '".$_REQUEST['apellido']."');";
        if(mysqli_query($conexion, $query)){
              $correo = $_REQUEST['correo'];
              $contrasena = $_REQUEST['contrasena'];
              $nombre = $_REQUEST['apellidos'] . " " . $_REQUEST["nombre"];
              $_SESSION['correo']= $_REQUEST['correo'];
              $_SESSION['contrasena'] = $_REQUEST['contrasena'];
              $_SESSION['apellidos'] = $_REQUEST['apellidos'];
              $_SESSION["nombre"] = $_REQUEST["nombre"];
        }
        } else {
            die();     
    }
  }
  //inicio de sesion
  if(isset($_REQUEST['inicio_sesion'])){
    $query ="SELECT * FROM `usuario` WHERE correo='".$_REQUEST['correo']."' AND contrasena='".$_REQUEST['contrasena']."';";
    //echo $query;
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_array($result); 
      $correo = $row['correo'];
      $contrasena = $row['contrasena'];
      $nombre = $row['apellidos'] . " " . $row["nombre"];
      $_SESSION['correo']= $row['correo'];
      $_SESSION['contrasena'] = $row['contrasena'];
      $_SESSION['apellidos'] = $row['apellidos'];
      $_SESSION["nombre"] = $row["nombre"];
    }
    
  }

  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="./js/javascript.js"></script>
    <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link rel="stylesheet" href="css/style_acc.css">
    <title>Cuenta | Leafy Twice</title>
</head>
<body>
 <div class="wrapper">
  <!---------------NAV BAR -------------------->
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
<!--------------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- Iniciar sesion -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>No tienes una cuenta? <a href="#" onclick="register()">Registrate</a></span>
                <header>Inicia Sesion</header>
            </div>
            <form action="index.php" method="POST" >
                <div class="input-box">
                    <input name="correo" type="email" class="input-field" placeholder="Correo" required="">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input name="contrasena" type="password" class="input-field" placeholder="Contraseña" required="">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input name="inicio_sesion" type="submit" class="submit" value="Inicia Sesion">
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Recuerdame</label>
                </div>
                <div class="two">
                    <label><a href="#">Olvidaste tu contraseña?</a></label>
                </div>
            </div>
        </div>

        <!------------------- Crear cuenta -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Tienes cuenta Leafy Twice? <a href="#" onclick="login()">Inicia sesion</a></span>
                <header>Registrate</header>
            </div>
            <form action="index.php" method="POST" >
                <div class="two-forms">
                    <div class="input-box">
                        <input name="nombre" type="text" class="input-field" placeholder="Nombre" required="">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input name="apellido" type="text" class="input-field" placeholder="Apellido/s" required="">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input name="correo" type="email" class="input-field" placeholder="Correo" required="">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input name="contrasena" type="password" class="input-field" placeholder="Contraseña" required="">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input name="contrasenaConf" type="password" class="input-field" placeholder="Confirmar contraseña" required="">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Registrarme">
                </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">Recuerdame</label>
                </div>
                <div class="two">
                    <label><a href="#">Terminos y condiciones</a></label>
                </div>
            </div>
        </div>
    </div>
</div>   

<script type="text/javascript">
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>
</html>