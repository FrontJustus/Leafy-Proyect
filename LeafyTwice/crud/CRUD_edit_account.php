<?php
include("../files/conexion.php");
$nombre = '';
$apellidos= '';
$correo= '';
$contrasena= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuario WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellidos = $row['apellidos'];
    $correo = $row['correo'];
    $contrasena = $row['contrasena'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $query = "UPDATE usuario set nombre = '$nombre', apellidos = '$apellidos', correo = '$correo', contrasena = '$contrasena' WHERE id=$id";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Usuario actualizado exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: CRUD_index.php');
}
?>
<?php include('header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="CRUD_edit_account.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
        </div>
        <div class="form-group">
        <input name="apellidos" type="text" class="form-control" value="<?php echo $apellidos;?>" placeholder="Actualizar apellido">
        </div>
        <div class="form-group">
          <input name="correo" type="email" class="form-control" value="<?php echo $correo; ?>" placeholder="Actualizar correo">
        </div>
        <div class="form-group">
          <input name="contrasena" type="text" class="form-control" value="<?php echo $contrasena; ?>" placeholder="Actualizar contrasena">
        </div>
        <center><button class="btn btn-success mx-auto" name="update">Update</button></center>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
