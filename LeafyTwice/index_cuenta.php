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
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuenta | Leafy twice</title>
  <link rel="stylesheet" href="css/style_cuenta.css">
  <link rel="stylesheet" href="css/style_nav.css">
  <link rel="icon" type="image/jpg" href="img/logo_leafy.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!-- BOOTSTRAP 5.3.3 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
     <!---------- NAV BAR --------------->
     <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px" data-bs-theme="light">
    <li><a class="dropdown-item rounded-2" href="#">Lorem</a></li>
    <li><a class="dropdown-item rounded-2" href="#">mas lorem</a></li>
    <li><a class="dropdown-item rounded-2" href="#">mas lorem aun</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item rounded-2" href="#">lorem separado</a></li>
  </ul>
  <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px" data-bs-theme="dark">
    <li><a class="dropdown-item rounded-2" href="#">Lorem</a></li>
    <li><a class="dropdown-item rounded-2" href="#">mas lorem</a></li>
    <li><a class="dropdown-item rounded-2" href="#">mas lorem aun</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item rounded-2" href="#">lorem separado</a></li>
  </ul>
</div>

    <!---------------------------fin de la nav bar-------------------------------------->
    <?php include('all_footer.php')?>
</body>
</html>