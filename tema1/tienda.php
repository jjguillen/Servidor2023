<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <title>Tienda</title>
</head>
<body>
    <div class="container">

    <h1>Bienvenido a tu tienda de deportes</h1>

    <?php
        function pintarPorCategoria($productos, $categoria) {
            echo "<h3>".strtoupper($categoria)."</h3>";
            $cont=0;
            foreach($productos as $valor) {
    
                if ($valor['categoria'] == $categoria) {
    
                    if ($cont == 4)
                        break;
                    $cont++;
                        
                    echo "<div class='card mb-5' style='width: 16rem;'>
                            <img src='".$valor["imagen"]."' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h5 class='card-title'>".$valor["nombre"]."</h5>
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
            array("nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas guay", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Pantalón running Adidas", "imagen" => "img/padidas.jpg", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Nike", "imagen" => "img/nike.png", "precio" => 120,
                    "categoria" => "zapatillas guay", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Chaqueta Puma", "imagen" => "img/puma.jpg", "precio" => 130,
                    "categoria" => "chaquetas", "descripcion" => "Me encanta",
                    "imagenes" => array("uno","dos","tres")),
            array("nombre" => "Zapatillas Adidas", "imagen" => "img/zadidas.jpg", "precio" => 170,
                    "categoria" => "zapatillas", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres"))
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