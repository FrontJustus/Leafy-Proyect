<?php

include('../files/conexion.php');

if (isset($_POST['save_acc'])) {
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $query = "INSERT INTO usuario(nombre, apellidos, correo, contrasena) VALUES ('$nombre', '$apellidos', '$correo', '$contrasena')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: CRUD_index.php');

}

?>
