<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="./css/fontawesome/css/solid.css" rel="stylesheet">

    <title>Tienda</title>
</head>
<body>


<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <h3>Tienda DeporOnline</h3>
        </div>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href='carro.php'>
            <button type="button" class="btn btn-outline-light me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </button>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="container mb-5"></div>

    <div class="container">

    <?php
        function pintarPorCategoria($productos, $categoria) {
            echo "<h5 class='text-secondary     '>".strtoupper($categoria)."</h5>";
            $cont=0;
            foreach($productos as $valor) {
    
                if ($valor['categoria'] == $categoria) {
    
                    if ($cont == 4)
                        break;
                    $cont++;
                        
                    echo "<div class='card mb-5' style='width: 16rem;'>
                            <img src='".$valor["imagen"]."' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h6 class='card-title'>".$valor["nombre"]."</h6>
                                <p class='card-text'>".$valor['descripcion']."</p>";

                    //Pintar las tres imágenes
                    echo "<table class='table table-bordered blue-500'>";
                    echo "<tr>";
                    foreach($valor['imagenes'] as $imagenMini) {
                        echo "<td>";
                        echo "<img width='40' src='' alt='".$imagenMini."'>";
                        echo "</td>";
                    }
                    echo "</tr>";
                    echo "</table>";

                    echo "
                                <p class='card-text'><small class='text-secondary'>".$valor["precio"]." €</small></p>
    
                                <a href='#' class='btn btn-primary'>Comprar</a>
                            </div>
                        </div>";    
                } 
            }

        }


        //Productos de una tienda
        $productos = array(
            array("nombre" => "Pantalón running Adidas 1", "imagen" => "img/pantalonesadidasrunning1.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas Running 1", "imagen" => "img/ZadidasRunning.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas Running 4", "imagen" => "img/ZadidasRunning4.jpg", "precio" => 170,
                    "categoria" => "zapatillas running", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas 2", "imagen" => "img/pantalonesadidasrunning2.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas Running 2", "imagen" => "img/ZadidasRunning2.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas 3", "imagen" => "img/pantalonesadidasrunning3.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Running Adidas 3", "imagen" => "img/ZadidasRunning3.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas 4", "imagen" => "img/pantalonesadidasrunning4.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas Trail2", "imagen" => "img/zadidastrail2.jpg", "precio" => 120,
                    "categoria" => "zapatillas trail", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas Trail1", "imagen" => "img/zadidastrail1.jpg", "precio" => 120,
                    "categoria" => "zapatillas trail", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
        );

        /*
        //Pintar productos
        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='text-primary'>";
        echo "  <tr>";
        //Sacamos el nombre de cada columna con array_keys del primer array (producto)
        foreach(array_keys($productos[0]) as $valor)
            echo "<td>".strtoupper($valor)."</td>";
        echo "  </tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach($productos as $valor) {
            echo "<tr>";

            foreach($valor as $campo) {
                echo "<td>";
                echo $campo;
                echo "</td>";
            }

            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo "<br><br>";
        */


        echo "<div class='container'>";
        echo "<div class='row'>";

        //Me quedo con los valores de la columna categoría, y los valores los meto en un array
        $categorias = array_column($productos, "categoria");
        //Quito repetidos
        $categorias = array_unique($categorias);

        foreach($categorias as $categoria)      
            pintarPorCategoria($productos, $categoria);

                


        echo "</div>";
        echo "</div>";


    ?>

</div>


</body>
</html>