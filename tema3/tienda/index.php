<?php session_start();
  //session_destroy();
?>

  <?php
    include("cabecera.php"); 
  ?>

    <?php

        //Función para pintar los productos por categoría
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
                                <h4 class='card-title'>".$valor["nombre"]."</h4>
                                <p class='card-text'>".$valor['descripcion']."</p>";

                    echo "
                                <p class='card-text'><small class='text-secondary'>".$valor["precio"]." €</small></p>
    
                                <a href='controlador.php?accion=comprar&id=".$valor["id"]."' class='btn btn-primary'>Comprar</a>
                            </div>
                        </div>";    
                } 
            }

        }


        //Productos de una tienda
        $productos = array(
            array("id" => 1, "nombre" => "Pantalón running Adidas 1", "imagen" => "img/pantalonesadidasrunning1.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 2, "nombre" => "Zapatillas Adidas Running 1", "imagen" => "img/ZadidasRunning.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 3, "nombre" => "Zapatillas Adidas Running 4", "imagen" => "img/ZadidasRunning4.jpg", "precio" => 170,
                    "categoria" => "zapatillas running", "descripcion" => "No están mal",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 4, "nombre" => "Pantalón running Adidas 2", "imagen" => "img/pantalonesadidasrunning2.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("id" =>5, "nombre" => "Zapatillas Adidas Running 2", "imagen" => "img/ZadidasRunning2.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 6, "nombre" => "Pantalón running Adidas 3", "imagen" => "img/pantalonesadidasrunning3.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 7, "nombre" => "Zapatillas Running Adidas 3", "imagen" => "img/ZadidasRunning3.jpg", "precio" => 120,
                    "categoria" => "zapatillas running", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 8, "nombre" => "Pantalón running Adidas 4", "imagen" => "img/pantalonesadidasrunning4.webp", "precio" => 50,
                    "categoria" => "pantalones running", "descripcion" => "Los mejores trotando por el monte",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 9, "nombre" => "Zapatillas Adidas Trail2", "imagen" => "img/zadidastrail2.jpg", "precio" => 120,
                    "categoria" => "zapatillas trail", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
            array("id" => 10, "nombre" => "Zapatillas Adidas Trail1", "imagen" => "img/zadidastrail1.jpg", "precio" => 120,
                    "categoria" => "zapatillas trail", "descripcion" => "Las mejores para correr",
                    "imagenes" => array("uno","dos","tres")),
        );

        //Metemos en la sesión todos los productos
        if (!isset($_SESSION['productos']))
          $_SESSION['productos'] = $productos;

        //Metemos en la sesión el carrito de la compra si no está ya
        //Si es la primera que vez entro creo la variable de sesión
        if (!isset($_SESSION['carro'])) {
          $_SESSION['carro'] = array();
        }


        //Div para pintar productos ----------------------------------------
        echo "<div class='container'>";
        echo "<div class='row'>";

        //Me quedo con los valores de la columna categoría, y los valores los meto en un array
        $categorias = array_column($_SESSION['productos'], "categoria");
        //Quito repetidos
        $categorias = array_unique($categorias);

        foreach($categorias as $categoria)      
            pintarPorCategoria($_SESSION['productos'], $categoria);

        echo "</div>";
        //Fin div para pintar productos ------------------------------------
        echo "</div>";


    ?>


<?php  include("pie.php"); ?>