<?php include("../files/conexion.php"); ?>
<?php include('header.php'); ?>
<main class="container p-4 dark">
  <div class="row">
    <div class="col-md-4">

      <!-- MENSAJES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      

       <!-- AGREGAR USUARIO -->
       
       <div class="card card-body">
        <form action="CRUD_save_account.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del usuario" autofocus>
          </div>
          <div class="form-group">
            <input name="apellidos" rows="2" class="form-control" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <input name="correo" type="email" rows="2" class="form-control" placeholder="Correo electrónico">
          </div>
          <div class="form-group">
            <input name="contrasena" rows="2" class="form-control" placeholder="Contraseña">
          </div>
          <input type="submit" name="save_acc" class="btn btn-success btn-block" value="Agregar usuario">
        </form>
      </div>
    </div>
    
       <!-- REVISAR; EDITAR Y ELIMINAR USUARIO -->

       <div class="col-md-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre(s)</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Editar/eliminar</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM usuario";
          $result_consult = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_consult)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['contrasena']; ?></td>
            <td>
              <a href="CRUD_edit_account.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="CRUD_delete_account.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


<?php include('footer.php'); ?>
