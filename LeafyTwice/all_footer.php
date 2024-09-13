 
    <footer class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Informacion</h4>
          <ul class="links">
            <li><a href="index_informacion.php">Sobre Nosotros</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Explorar</h4>
          <ul class="links">
            <?php
                  if(isset($correo)){
                ?>
                <li><a href="index_plantas.php" class="link">Plantas</a></li>
                <?php } ?>
                <li><a href="index_clima.php" class="link">Clima</a></li>
                <li><a href="index_agua.php" class="link">Agua</a></li>
                <?php
                  if(isset($correo)){
                    echo '<li><a href="index_galeria.php" class="link">Galeria</a></li>';
                  }
                ?>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Extra</h4>
          <p>
            Leafy Twice se mantiene en desarrollo constante para mejorar y lograr el mejor producto.
            Siguenos en nuestras redes sociales para recibir tus comentarios, solicitudes y sugerencias!
          </p>
          <div class="icons">
            <i class='bx bxl-instagram' ><a href="https://www.instagram.com/leafy_twice/"></a></i>
            <i class='bx bxl-whatsapp' ><a href="whatsapp.com"></a></i>
            <i class='bx bxl-gmail' ><a href="gmail.com"></a></i>
          </div>
        </div>
      </div>
    </footer>
    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
