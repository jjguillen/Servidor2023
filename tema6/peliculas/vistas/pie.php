
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>

<!-- MODALES PARA INSERTAR -->

<!-- Modal -->
<div class="modal fade" id="nuevaPelicula" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Película</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id='nuevaPeliculaForm' enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo">
          </div>
          <div class="mb-3">
            <label class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Cartel</label>
            <input type="file" class="form-control" name="cartel">
          </div>
          <div class="mb-3">
            <label class="form-label">Nota</label>
            <input type="range" class="form-control" name="notaImdb" min="1" max="10">
          </div>
          <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text" class="form-control" name="director">
          </div>
          <div class="mb-3">
            <label class="form-label">Año</label>
            <input type="text" class="form-control" name="year">
          </div>
          <input type="hidden" name="accion" value="nuevaPelicula">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" formaction="enrutador.php" formmethod="POST" form="nuevaPeliculaForm">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id='loginForm'>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <input type="hidden" name="accion" value="login">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" formaction="enrutador.php" formmethod="POST" form="loginForm">Entrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="nuevaCritica" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Crítica</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id='nuevaCriticaForm'>
          <div class="mb-3">
            <label class="form-label">Nota</label>
            <input type="range" class="form-control" name="nota" min="0" max="10">
          </div>
          <div class="mb-3">
            <label class="form-label">Texto</label>
            <textarea class="form-control" name="texto"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <input type="hidden" name="accion" value="nuevaCritica">

<?php
        //Si estoy en verDetalle película, voy a leer $_GET[id] que lleva el id de película
        if (isset($_GET['id'])) {
            echo "<input type='hidden' name='id_pelicula' value='".$_GET['id']."'>";
        }

?>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" formaction="enrutador.php" formmethod="POST" form="nuevaCriticaForm">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>