<?php
include("../files/conexion.php");
$contrasena= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuario WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $contrasena = $row['contrasena'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $contrasena = $_POST['contrasena'];

  $query = "UPDATE usuario set contrasena = '$contrasena' WHERE id=$id";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Usuario actualizado exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: CRUD_index.php');
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
    <link rel="stylesheet" href="css/style_pswrd.css">
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
                <span>No deseas cambiar tu contraseña? <a href="index_acc.php">Inicia sesion</a></span>
                <header>Editar contraseña</header>
            </div>
            <form action="index.php" method="POST" >
                <div class="input-box">
                    <input name="correo" type="password" class="input-field" value="<?php echo $contrasena; ?>" placeholder="Contraseña" required="">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input name="contrasena" type="text" class="input-field" value="<?php echo $contrasena; ?>" placeholder="Actualizar contrasena">

                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input name="inicio_sesion" type="submit" class="submit" value="Inicia Sesion">
                </div>
            </form>
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