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

    $query ="INSERT INTO `usuario` (`correo`, `contrasena`, `nombre`, `apellidos`) 
             VALUES ('".$_REQUEST['correo']."', '".$_REQUEST['contrasena']."', '".$_REQUEST['nombre']."', '".$_REQUEST['apellido']."');";
    if(mysqli_query($conexion, $query)){
      $correo = $_REQUEST['correo'];
      $contrasena = $_REQUEST['contrasena'];
      $nombre = $_REQUEST['apellido'] . " " . $_REQUEST["nombre"];
      $_SESSION['correo']= $_REQUEST['correo'];
      $_SESSION['contrasena'] = $_REQUEST['contrasena'];
      $_SESSION['apellidos'] = $_REQUEST['apellido'];
      $_SESSION["nombre"] = $_REQUEST["nombre"];
    }
  }
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