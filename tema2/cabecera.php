<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    

  <div class='row bg-dark'>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">

      <?php
        //Incluir el fichero con funciones
        require_once("./lib.php");

        if (isset($_GET['categoria'])) {

            $categorias = ["deportes", "rol", "accion", "aventuras", "conduccion"];
            foreach ($categorias as $categoria)
                pintarEntradaMenu($categoria,$_SERVER['SCRIPT_NAME']);

        } else {
            $categorias = ["deportes", "rol", "accion", "aventuras", "conduccion"];
            foreach ($categorias as $categoria)
                pintarEntradaMenuPrimero($categoria,$_SERVER['SCRIPT_NAME']);

        }
        
            
      ?>
    
      </ul>
    </header>
  </div>


  <div class='row'>
    <div class='col'>
        <!-- SIDEBAR -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">TIENDA</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="eje1.php" class="nav-link text-secondary" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                JUEGOS
                </a>
            </li>
            <li>
                <a href="eje2.php" class="nav-link text-secondary">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                JUEGOS DE MESA
                </a>
            </li>
            </ul>
            <hr>
         
        </div>
        <!-- FIN SIDEBAR -->

    </div>  
