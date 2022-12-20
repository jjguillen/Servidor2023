<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    
<header class="p-3 mb-3 border-bottom bg-secondary bg-gradient">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><h3><a href="enrutador.php?accion=mostrarP" class="nav-link px-2 link-light">PADALEA</a></h3></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
    if (isset($_SESSION['usuario'])) {
        echo "<h6 class='text-black'>". unserialize($_SESSION['usuario'])->getApodo() ."</h6>";
    } else {
        echo "<script>window.location='enrutador.php?accion=inicio';</script>";
    }
?>    
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="enrutador.php?accion=cerrar">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  
    <div class="container">
        <br>
        <div class='row mb-4'>
          <div class='col'>
            <h4 class='text-secondary mr-4'>Partidas on fire
            <a href="#" class="" data-bs-toggle="modal" data-bs-target="#modalNuevaPartida">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
              </svg>
            </a>
            </h4>
          </div>
        </div>
        

        <div id="ajax">
    